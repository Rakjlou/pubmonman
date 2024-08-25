<?php
namespace VAB;

use FastRoute\RouteCollector as RouteCollector;
use League\Plates\Engine as PlatesEngine;

use Rak\BB\Application as Application;

class VAB extends Application {
	protected array $templateFolders = [
		'shared',
		'page'
	];

	protected function setupRouteCollector(RouteCollector $collector) {
		$collector->addRoute('GET', '/', [$this, 'homeController']);
		$collector->addRoute('GET', '/accueil', fn () => $this->redirect(301, '/'));
		$collector->addRoute('GET', '/mon-experience', [$this, 'experienceController']);
		$collector->addRoute('GET', '/le-travail-du-lecteur', [$this, 'readersWorkController']);
		$collector->addRoute('GET', '/les-tarifs', [$this, 'pricingController']);
		$collector->addRoute('GET', '/blog', [$this, 'blogController']);
		$collector->addRoute('GET', '/faq', [$this, 'faqController']);
	}

	protected function setupPlatesEngine() {
		$addFolder = fn ($name) =>
			$this->templates->addFolder(
				$name,
				implode(DIRECTORY_SEPARATOR, [
					dirname(__DIR__),
					'templates',
					$name
				])
			)
		;

		foreach ($this->templateFolders as $name)
			$addFolder($name);
	}

	public function homeController() {
		echo $this->templates->render('page::home', []);
	}

	public function experienceController() {
		echo "experienceController";
	}

	public function readersWorkController() {
		echo "readersWorkController";
	}

	public function pricingController() {
		echo "pricingController";
	}

	public function blogController() {
		echo "blogController";
	}

	public function faqController() {
		echo "faqController";
	}
};
