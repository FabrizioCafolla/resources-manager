<?php

	namespace Kosmosx\Frontend\Services\Resources;

	use Kosmosx\Frontend\Services\FrontendService;
	use Kosmosx\Frontend\Services\Interfaces\ResourcesInterface;

	class JsFrontend extends FrontendService implements ResourcesInterface
	{
		protected $js = array();

		public function dump(?string $get = null): ?string
		{
			return $this->rendering($this->js, $get);
		}

		public function add(string $url, array $property = array(), string $put = 'body'): FrontendServiceInterface
		{
			$property = $this->property($property, true);

			$this->push($this->js, 'script', $put, $property, $content);
			return $this;
		}

		/**
		 * @param string $context
		 * @param string|null $name
		 * @return bool
		 */
		public function has(string $context, ?string $name = null): bool
		{
			return $this->exist($this->js,$context, $name = null);
		}

		/**
		 * @param string $context
		 * @param string|null $name
		 * @return bool
		 */
		public function forget(string $context, ?string $name = null): bool
		{
			return $this->delete($this->js,$context, $name = null);
		}
	}