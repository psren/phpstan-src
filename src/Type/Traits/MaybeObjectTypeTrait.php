<?php declare(strict_types = 1);

namespace PHPStan\Type\Traits;

use PHPStan\Analyser\Scope;
use PHPStan\Reflection\ClassConstantReflection;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Reflection\PropertyReflection;

trait MaybeObjectTypeTrait
{

	public function canAccessProperties(): bool
	{
		return true;
	}

	public function hasProperty(string $propertyName): bool
	{
		return false;
	}

	public function getProperty(string $propertyName, Scope $scope): PropertyReflection
	{
		throw new \PHPStan\ShouldNotHappenException();
	}

	public function canCallMethods(): bool
	{
		return true;
	}

	public function hasMethod(string $methodName): bool
	{
		return false;
	}

	public function getMethod(string $methodName, Scope $scope): MethodReflection
	{
		throw new \PHPStan\ShouldNotHappenException();
	}

	public function canAccessConstants(): bool
	{
		return true;
	}

	public function hasConstant(string $constantName): bool
	{
		return false;
	}

	public function getConstant(string $constantName): ClassConstantReflection
	{
		throw new \PHPStan\ShouldNotHappenException();
	}

	public function isCloneable(): bool
	{
		return true;
	}

}
