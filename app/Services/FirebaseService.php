<?php

namespace App\Services;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;

class FirebaseService
{
    protected Database $database;

    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount(config('firebase.credentials_file'))
            ->withDatabaseUri(config('firebase.database_url'));

        $this->database = $factory->createDatabase();
    }

    /**
     * Obtiene todos los registros de un nodo
     */
    public function getAll(string $node): array
    {
        $data = $this->database->getReference($node)->getValue();
        return $data ? $data : [];
    }

    /**
     * Obtiene un registro por su ID
     */
    public function getById(string $node, string $id): ?array
    {
        return $this->database->getReference("{$node}/{$id}")->getValue();
    }

    /**
     * Crear un nuevo registro
     */
    public function create(string $node, array $data): string
    {
        $ref = $this->database->getReference($node)->push($data);
        return $ref->getKey(); // Devuelve el ID generado por Firebase
    }

    /**
     * Actualizar un registro por ID
     */
    public function update(string $node, string $id, array $data): bool
    {
        $this->database->getReference("{$node}/{$id}")->update($data);
        return true;
    }

    /**
     * Eliminar un registro por ID
     */
    public function delete(string $node, string $id): bool
    {
        $this->database->getReference("{$node}/{$id}")->remove();
        return true;
    }
}
