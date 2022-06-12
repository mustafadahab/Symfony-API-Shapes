<?php

namespace App\Controller;

use App\Entity\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Annotations as OA;
use App\Entity\Circle;


/**
 * @Route("/api", name="api_")
 */
class ShapeController extends AbstractController
{


    /**
     * @Route("/circle/{radius}", name="Circle", methods={"GET"})
     * @OA\Parameter(
     *     name="radius",
     *     in="path",
     *     description="The circle radius",
     *     example="2",
     *     @OA\Schema(type="string")
     * )
     * @OA\Response(
     *     response=200,
     *     description="Returns circle dimentions",
     *     @OA\JsonContent(
     *        type="array",
     *        @OA\Items(ref=@Model(type=Shape::class, groups={"full"}))
     *     )
     * )
     * @OA\Tag(name="Shapes")
     */
    public function circle(Request $request): Response
    {

        $radius = $request->get('radius');

        $circle = new Circle($radius);

        $data =
            [
            "type"          => "circle",
            "radius"        => $radius,
            "surface"       => $circle->surfaces(),
            "circumference" => $circle->circumference()
            ];

        return $this->json($data);
    }

    /**
     * @Route("/triangle/{side1}/{side2}/{side3}", name="triangle", methods={"GET"})
     * @OA\Parameter(
     *     name="side1",
     *     in="path",
     *     description="The triangle side1",
     *     example="3",
     *     @OA\Schema(type="string")
     * )
     * @OA\Parameter(
     *     name="side2",
     *     in="path",
     *     description="The triangle side2",
     *     example="4",
     *     @OA\Schema(type="string")
     * )
     * @OA\Parameter(
     *     name="side3",
     *     in="path",
     *     description="The triangle side3",
     *     example="5   ",
     *     @OA\Schema(type="string")
     * )
     * @OA\Response(
     *     response=200,
     *     description="Returns triangle dimentions",
     *     @OA\JsonContent(
     *        type="array",
     *        @OA\Items(ref=@Model(type=Shape::class, groups={"full"}))
     *     )
     * )
     * @OA\Tag(name="Shapes")
     */
    public function triangle(Request $request): Response
    {

        $side1 = $request->get('side1');
        $side2 = $request->get('side2');
        $side3 = $request->get('side3');

        $Triangle = new Triangle($side1,$side2,$side3);

        $data =
            [
                "type"          => "circle",
                "a"             => $side1,
                "b"             => $side2,
                "c"             => $side3,
                "surface"       => $Triangle->surfaces(),
                "circumference" => $Triangle->circumference()
            ];

        return $this->json($data);
    }


}