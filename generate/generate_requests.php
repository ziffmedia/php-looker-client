<?php

require_once __DIR__.'/../vendor/autoload.php';
use cebe\openapi\Reader;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;

$filesPath = __DIR__.'/../src/Request';

$spec = Reader::readFromJsonFile(realpath(__DIR__.'/Looker.4.0.oas.json'));
foreach ($spec->components->schemas as $schema => $schemaDefinition) {
    $file = new PhpFile();
    $fileName = ucwords($schema).'.php';
    $class = new ClassType($schema);
    $namespace = new PhpNamespace("ZiffMedia\Looker\Type");
    $namespace->add($class);
    foreach ($schemaDefinition->properties as $property => $propertyDefinition) {
        $type = match ($propertyDefinition->type) {
            'string' => 'string',
            'integer' => 'int',
            'boolean' => 'bool',
            'object' => 'array',
            'array' => 'array',
            null => 'null',
            'number' => 'int',
            'any' => 'mixed'
        };

        if ($property == 'model') {
            dump($schema);
            dump($property);
            dd($propertyDefinition);
        }

        $class->addProperty($property)
            ->setReadOnly($propertyDefinition->readOnly)
            ->setNullable($propertyDefinition->nullable ?? false)
            ->setType($type);
    }
    $file->addNamespace($namespace);
    file_put_contents($filesPath.'/'.$fileName, (string) $file);
}
