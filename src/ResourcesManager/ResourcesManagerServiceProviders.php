<?php

	namespace ResourcesManager;

	use Illuminate\Support\ServiceProvider;

	class ResourcesManagerServiceProviders extends ServiceProvider
	{
		/**
		 * Register any application services.
		 *
		 * @return void
		 */
		public function register()
		{
			$this->registerAlias();
			$this->registerServices();
		}
		/**
		 * Load alias
		 */
		protected function registerAlias()
		{
			class_alias(\ResourcesManager\Services\ResourcesService::class, 'ResourcesService');
			class_alias(\ResourcesManager\Services\MetatagService::class, 'MetatagService');
		}
		/**
		 * Register Services
		 */
		protected function registerServices()
		{
			/**
			 * Service Response
			 */
			$this->app->singleton('service.resources', 'ResourcesManager\Services\ResourcesService');
			$this->app->singleton('service.metatag', 'ResourcesManager\Services\MetatagService');
		}
	}