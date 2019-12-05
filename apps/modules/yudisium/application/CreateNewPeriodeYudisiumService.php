<?php

namespace Idy\Yudisium\Application;

use Idy\Yudisium\Domain\Model\PeriodeYudisiumRepository;
use Idy\Yudisium\Domain\Model\PeriodeYudisium;

class CreateNewPeriodeYudisiumService
{
    private $periodeYudisiumRepository;

    public function __construct(PeriodeYudisiumRepository $periodeYudisiumRepository)
    {
        $this->periodeYudisiumRepository = $periodeYudisiumRepository;
    }

    public function execute(CreateNewPeriodeYudisiumRequest $request)
    {
        $result = $this->periodeYudisiumRepository->create();
        return $result;
        $ideadId = new IdeaId();
        // $title = $request->getIdeaTitle();
        // $content = $request->getIdeaContent();
        // $author = new Author($request->getAuthorName(), $request->getAuthorEmail());
        // $idea = new Idea($ideadId, $title, $content, $author);
        
        // return new CreateNewIdeaResponse($this->ideaRepository->save($idea));
    }

}