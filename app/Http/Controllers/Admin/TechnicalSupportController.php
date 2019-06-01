<?php

namespace App\Http\Controllers\Admin;

use App\BusinessLogic\PageContentManager;
use App\Entities\PageContent;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class TechnicalSupportController extends Controller
{
    private $_pageContentManager;
    private $technicalSupportPageName = "technicalSupport";

    public function __construct(PageContentManager $pageContentManager)
    {
        $this->_pageContentManager = $pageContentManager;
    }

    public function index()
    {
        $pageContent = $this->_pageContentManager->getPageContentByPageName($this->technicalSupportPageName);
        return view('admin.contact.technicalSupport', ['content' => htmlspecialchars_decode($pageContent->getContent())]);
    }

    public function saveTechnicalSupportContent(Request $request)
    {
        try {
            $content = $request->technicalSupportContent;
            $content = htmlspecialchars($content, ENT_QUOTES);

            $pageContent = new PageContent();
            $pageContent->setPageName($this->technicalSupportPageName);
            $pageContent->setContent($content);

            $this->_pageContentManager->savePageContent($pageContent);
            return $this->jsonSuccessResult(null, "Содержание страницы 'Тех.поддержка' успешно сохранена");
        } catch (Exception $e) {
            return $this->jsonSuccessResult($e->getMessage());
        }
    }
}
