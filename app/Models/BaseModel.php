<?php

declare(strict_types=1);

namespace App\Models;

use App\Helpers\FunctionHelper;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

abstract class BaseModel extends Model
{
    protected $hidden = [];
    public $timestamps = false;
    protected $keyType = "string";
    private static array $joins = [];
    private static array $filters = [];
    private static string $columnOrdination = "sequencia";

    public static function setFilters(array $filters): BaseModel
    {
        self::$filters = $filters;
        return new static;
    }

    public static function setJoins(array $joins): BaseModel
    {
        self::$joins = $joins;
        return new static;
    }

    public static function setColumnOrdination(string $column): BaseModel
    {
        self::$columnOrdination = $column;
        return new static;
    }

    public static function getAll(): array
    {
        $collection = self::with(self::$joins)
            ->where(self::$filters)
            ->orderBy(self::$columnOrdination)
            ->get();

        return $collection->toArray();
    }

    public static function saveOrUpdate(array &$input): void
    {
        if (empty($input["id"])) {
            self::setIDCollumn($input);
            self::setDateCollumn($input);
            self::setSequenceCollumn($input);

            try {
                self::create($input);
            } catch (Exception $e) {
                if (Str::contains($e->getMessage(), "sequencia_unique")) {
                    $input["id"] = null;
                    self::saveOrUpdate($input);
                    return;
                }

                throw $e;
            }
        } else {
            self::setDateCollumn($input, 'dataAlteracao');
            self::where(["id" => $input["id"]])->update($input);
        }
    }

    public static function remove(string $id, string $field = "id"): bool
    {
        $deleted = self::where($field, $id)->delete();
        return !!$deleted;
    }

    private static function setIDCollumn(array &$input): void
    {
        $input["id"] = FunctionHelper::uuid();
    }

    private static function setSequenceCollumn(array &$input): void
    {
        $last = self::orderBy("sequencia", "DESC")->first();
        $input['sequencia'] = ($last) ? ($last->sequencia + 1) : 1;
    }

    private static function setDateCollumn(array &$input, string $dateCollumn = 'dataCadastro'): void
    {
        $input[$dateCollumn] = FunctionHelper::dateTimeNow();
    }
}
