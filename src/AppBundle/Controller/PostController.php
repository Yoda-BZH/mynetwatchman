<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\Entity\Report;

class PostController extends Controller
{

    /**
     * @Route("/post")
     * @Method("GET")
     *
     * @Template("AppBundle:Post:success.html.twig")
     *
     * description
     *
     * @return void
     */
    public function newAction()
    {
        $request = $this->getRequest();

        $AT = $request->query->get('AT');
        $AV = $request->query->get('AV');
        $AgentEmail = $request->query->get('AgentEmail');
        $AgentPassword = $request->query->get('AgentPassword');
        $AttackerIP = $request->query->get('AttackerIP');
        $SrcPort = $request->query->get('SrcPort');
        $ProtocolID = $request->query->get('ProtocolID');
        $DestPort = $request->query->get('DestPort');
        $AttackCount = $request->query->get('AttackCount');
        $VictimIP = $request->query->get('VictimIP');
        $AttackDateTime = new \Datetime($request->query->get('AttackDateTime'));

        $report = new Report;
        $report
            ->setAt($AT)
            ->setAv($AV)
            ->setAgentEmail($AgentEmail)
            ->setAgentPassword($AgentPassword)
            ->setAttackerIP($AttackerIP)
            ->setSrcPort($SrcPort)
            ->setProtocolID($ProtocolID)
            ->setDestPort($DestPort)
            ->setAttackCount($AttackCount)
            ->setVictimIP($VictimIP)
            ->setAttackDateTime($AttackDateTime)
            ;

        $em = $this->getDoctrine()->getManager();
        $em->persist($report);
        $em->flush();

        return array(
        );
    }
}
