<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\MetManager;

class HomeController extends AbstractController
{
    const PERIODS = array(
        "Antiquity" => [
            "begin" => '-3000',
            "end" => '475'
        ],
        "MiddleAge" => [
            "begin" => '476',
            "end" => '1491'
        ],
        "Modern" => [
            "begin" => '1492',
            "end" => '1788'
        ],
        "Contemporary" => [
            "begin" => '1789',
            "end" => '2020'
        ]);
    const REGION =array(
        'France','Italy','Japan','China','Germany','Africa'
    );

    /**
     * Display home page
     *
     * @return string
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        return $this->twig->render('Home/index.html.twig', ['regions' => self::REGION , 'periods' =>self::PERIODS]);
    }
}
