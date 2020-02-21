<?php

namespace Pumukit\StatsUIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/admin/stats")
 * @Security("is_granted('ROLE_ACCESS_STATS')")
 */
class StatsController extends Controller
{
    /**
     * @Route("/series", name="pumukit_stats_series_index")
     * @Route("/objects", name="pumukit_stats_mmobj_index")
     * @Route("/series/{id}", name="pumukit_stats_series_index_id")
     * @Route("/objects/{id}", name="pumukit_stats_mmobj_index_id")
     * @Template
     *
     * @param Request $request
     *
     * @return array
     */
    public function indexAction(Request $request)
    {
        $routeName = $request->get('_route');
        $translator = $this->get('translator');

        if($routeName == 'pumukit_stats_series_index') {
            $title = 'General Statistics for Series';
        } elseif($routeName == 'pumukit_stats_mmobj_index') {
            $title = 'General Statistics for Objects (videos/audios)';
        } elseif($routeName == 'pumukit_stats_series_index_id') {
            $title = 'Statistics of the series';
        } else {
            $title = 'Statistics of the object';
        }
        return array('template_title' => $translator->trans($title));
    }
}
