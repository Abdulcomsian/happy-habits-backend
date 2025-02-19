<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\AvatarRequest;
use App\Http\Resources\BeardResource;
use App\Http\Resources\ColorResource;
use App\Http\Resources\EyeBrowResource;
use App\Http\Resources\EyeResource;
use App\Http\Resources\GlassResource;
use App\Http\Resources\HairResource;
use App\Http\Resources\LipResource;
use App\Http\Resources\NoseResource;
use App\Http\Resources\ShirtResource;
use App\Services\AvatarService;
use App\Services\BeardService;
use App\Services\ColorService;
use App\Services\EyeBrowService;
use App\Services\EyeService;
use App\Services\GlassService;
use App\Services\HairService;
use App\Services\LipService;
use App\Services\NoseService;
use App\Services\ShirtService;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    protected $service;
    protected $colorService;
    protected $hairService;
    protected $shirtService;
    protected $glassService;
    protected $eyeService;
    protected $eyeBrowService;
    protected $noseService;
    protected $lipService;
    protected $beardService;

    public function __construct(
        AvatarService $service,
        ColorService $colorService,
        HairService $hairService,
        ShirtService $shirtService,
        GlassService $glassService,
        EyeService $eyeService,
        EyeBrowService $eyeBrowService,
        NoseService $noseService,
        LipService $lipService,
        BeardService $beardService,
    )
    {
        $this->service = $service;
        $this->colorService = $colorService;
        $this->hairService = $hairService;
        $this->shirtService = $shirtService;
        $this->glassService = $glassService;
        $this->eyeService = $eyeService;
        $this->eyeBrowService = $eyeBrowService;
        $this->noseService = $noseService;
        $this->lipService = $lipService;
        $this->beardService = $beardService;
    }


    public function getAccessories(){
        try{
            $colors = $this->colorService->index();
            $hairs = $this->hairService->index();
            $shirts = $this->shirtService->index();
            $glasses = $this->glassService->index();
            $eyes = $this->eyeService->index();
            $eyeBrows = $this->eyeBrowService->index();
            $noses = $this->noseService->index();
            $lips = $this->lipService->index();
            $beards = $this->beardService->index();

            return response()->json([
                "status" => true,
                "data" => [
                    "colors" => $colors->isNotEmpty() ? ColorResource::collection($colors) : null,
                    "hairs" => $hairs->isNotEmpty() ? HairResource::collection($hairs) : null,
                    "shirts" => $shirts->isNotEmpty() ? ShirtResource::collection($shirts) : null,
                    "glasses" => $glasses->isNotEmpty() ? GlassResource::collection($glasses) : null,
                    "eyes" => $eyes->isNotEmpty() ? EyeResource::collection($eyes) : null,
                    "eyeBrows" => $eyeBrows->isNotEmpty() ? EyeBrowResource::collection($eyeBrows) : null,
                    "noses" => $noses->isNotEmpty() ? NoseResource::collection($noses) : null,
                    "lips" => $lips->isNotEmpty() ? LipResource::collection($lips) : null,
                    "beards" => $beards->isNotEmpty() ? BeardResource::collection($beards) : null,
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
            dd($e->getMessage());
            return response()->json(['status' => false, "message" => "Something Went Wrong"], 400);
        }
    }
}
