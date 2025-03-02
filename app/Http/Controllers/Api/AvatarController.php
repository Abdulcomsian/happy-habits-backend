<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\AvatarRequest;
use App\Http\Resources\AccessoriesResource;
use App\Http\Resources\BeardResource;
use App\Http\Resources\ClothResource;
use App\Http\Resources\EyeBrowResource;
use App\Http\Resources\EyeResource;
use App\Http\Resources\FaceShapeResource;
use App\Http\Resources\HairResource;
use App\Http\Resources\HatResource;
use App\Http\Resources\LipResource;
use App\Http\Resources\NoseResource;
use App\Http\Resources\ShoeResource;
use App\Services\AccessoriesService;
use App\Services\AvatarService;
use App\Services\BeardService;
use App\Services\ClothService;
use App\Services\EyeBrowService;
use App\Services\EyeService;
use App\Services\FaceShapeService;
use App\Services\HairService;
use App\Services\HatService;
use App\Services\LipService;
use App\Services\NoseService;
use App\Services\ShirtService;
use App\Services\ShoeService;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    protected $service;
    protected $accessoryService;
    protected $beardService;
    protected $clothService;
    protected $eyeBrowService;
    protected $eyeService;
    protected $faceshapeService;
    protected $hairService;
    protected $hatService;
    protected $lipService;
    protected $noseService;
    protected $shoeService;

    public function __construct(
        AvatarService $service,
        AccessoriesService $accessoryService,
        BeardService $beardService,
        ClothService $clothService,
        EyeBrowService $eyeBrowService,
        EyeService $eyeService,
        FaceShapeService $faceshapeService,
        HairService $hairService,
        HatService $hatService,
        LipService $lipService,
        NoseService $noseService,
        ShoeService $shoeService,
    )
    {
        $this->service = $service;
        $this->accessoryService = $accessoryService;
        $this->beardService = $beardService;
        $this->clothService = $clothService;
        $this->eyeBrowService = $eyeBrowService;
        $this->eyeService = $eyeService;
        $this->faceshapeService = $faceshapeService;
        $this->hairService = $hairService;
        $this->hatService = $hatService;
        $this->lipService = $lipService;
        $this->noseService = $noseService;
        $this->shoeService = $shoeService;
    }


    public function getAccessories(){
        try{
            $accessoriesMale = $this->accessoryService->index("male");
            $beardsMale = $this->beardService->index("male");
            $clothesMale = $this->clothService->index("male");
            $eyeBrowsMale = $this->eyeBrowService->index("male");
            $eyesMale = $this->eyeService->index("male");
            $faceShapeMale = $this->faceshapeService->index("male");
            $hairsMale = $this->hairService->index("male");
            $hatsMale = $this->hatService->index("male");
            $lipsMale = $this->lipService->index("male");
            $nosesMale = $this->noseService->index("male");
            $shoesMale = $this->shoeService->index("male");


            $accessoriesFemale = $this->accessoryService->index("female");
            $clothesFemale = $this->clothService->index("female");
            $eyeBrowsFemale = $this->eyeBrowService->index("female");
            $eyesFemale = $this->eyeService->index("female");
            $faceShapeFemale = $this->faceshapeService->index("female");
            $hairsFemale = $this->hairService->index("female");
            $hatsFemale = $this->hatService->index("female");
            $lipsFemale = $this->lipService->index("female");
            $nosesFemale = $this->noseService->index("female");
            $shoesFemale = $this->shoeService->index("female");

            return response()->json([
                "status" => true,
                "data" => [
                    "male" => [
                        "accessories" => $accessoriesMale->isNotEmpty() ? AccessoriesResource::collection($accessoriesMale) : null,
                        "beard" => $beardsMale->isNotEmpty() ? BeardResource::collection($beardsMale) : null,
                        "clothes" => $clothesMale->isNotEmpty() ? ClothResource::collection($clothesMale) : null,
                        "eyebrows" => $eyeBrowsMale->isNotEmpty() ? EyeBrowResource::collection($eyeBrowsMale) : null,
                        "eyes" => $eyesMale->isNotEmpty() ? EyeResource::collection($eyesMale) : null,
                        "faceShape" => $faceShapeMale->isNotEmpty() ? FaceShapeResource::collection($faceShapeMale) : null,
                        "hairs" => $hairsMale->isNotEmpty() ? HairResource::collection($hairsMale) : null,
                        "hats" => $hatsMale->isNotEmpty() ? HatResource::collection($hatsMale) : null,
                        "lips" => $lipsMale->isNotEmpty() ? LipResource::collection($lipsMale) : null,
                        "noses" => $nosesMale->isNotEmpty() ? NoseResource::collection($nosesMale) : null,
                        "shoes" => $shoesMale->isNotEmpty() ? ShoeResource::collection($shoesMale) : null,
                    ],


                    "female" => [
                        "accessories" => $accessoriesFemale->isNotEmpty() ? AccessoriesResource::collection($accessoriesFemale) : null,
                        "clothes" => $clothesFemale->isNotEmpty() ? ClothResource::collection($clothesFemale) : null,
                        "eyebrows" => $eyeBrowsFemale->isNotEmpty() ? EyeBrowResource::collection($eyeBrowsFemale) : null,
                        "eyes" => $eyesFemale->isNotEmpty() ? EyeResource::collection($eyesFemale) : null,
                        "faceShape" => $faceShapeFemale->isNotEmpty() ? FaceShapeResource::collection($faceShapeFemale) : null,
                        "hairs" => $hairsFemale->isNotEmpty() ? HairResource::collection($hairsFemale) : null,
                        "hats" => $hatsFemale->isNotEmpty() ? HatResource::collection($hatsFemale) : null,
                        "lips" => $lipsFemale->isNotEmpty() ? LipResource::collection($lipsFemale) : null,
                        "noses" => $nosesFemale->isNotEmpty() ? NoseResource::collection($nosesFemale) : null,
                        "shoes" => $shoesFemale->isNotEmpty() ? ShoeResource::collection($shoesFemale) : null,
                    ],
                ]
            ]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }

    public function setAvatar(AvatarRequest $request){
        try{
            $this->service->store($request->validated());
            return response()->json([
                "status" => true,
                "message" => "Avatar Saved Successfully",
            ]);
        }catch(\Exception $e){
            return response()->json(['status' => false, "message" => "Something Went Wrong", "error" => $e->getMessage(), "on line" => $e->getLine()], 400);
        }
    }
}
