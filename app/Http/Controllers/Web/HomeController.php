<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommunityMember\CommunityMemberRequest;
use App\Repositories\CommunityMember\CommunityMemberRepository;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    //

    private $view_data;
    private $request, $communityMemberRepository;

    public function __construct(
        Request $request,
        CommunityMemberRepository $communityMemberRepository
    ) {
        $this->request = $request;
        $this->communityMemberRepository = $communityMemberRepository;
        parent::__construct();
    }


    public function slug($slug = null)
    {
        $slug = $slug ? $slug : 'index';
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'website/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        if (file_exists($file_path)) {
            // switch ($slug) {
            //     case 'index':

            //         break;
            // }
            return view('website.pages.' . $slug);
        }
        return view('website.pages.404');
    }

    public function register(CommunityMemberRequest $request)
    {
        //
        $data = $request->all();

        $member = $this->communityMemberRepository->all()->where('citizenship', $data['citizenship'])->first();

        if ($member) {
            return redirect()->back()->withErrors([
                'already' => 'You have been already registered'
            ]);
        } else {
            $member = $this->communityMemberRepository->store($data);

            if ($data['marital_status'] === 'married' && $request->has('spouse_citizenship')) {
                $spouse = $this->communityMemberRepository->getOrCreateMember($request->input('spouse_citizenship'));
                $member->spouse()->associate($spouse);
                $member->save();
            }

            // If the mother is provided, link the mother
            if ($request->has('mother_citizenship')) {
                $mother = $this->communityMemberRepository->getOrCreateMember($request->input('mother_citizenship'));
                $member->mother()->associate($mother);
                $member->save();
            }

            // If the father is provided, link the father
            if ($request->has('parent_citizenship')) {
                $father = $this->communityMemberRepository->getOrCreateMember($request->input('parent_citizenship'));
                $member->father()->associate($father);
                $member->save();
            }
        }

        return redirect()->back();
    }
}
