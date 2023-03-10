<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Controller;
use App\Models\SiteInfo;
use App\Repository\Cms\CmsInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FacadesFile;
use illuminate\Support\Str;
use Illuminate\Validation\Rules\File;



class CmsController extends Controller
{
    private $cms_s;

    public function __construct(CmsInterface $cmsInterface)
    {
        $this->cms_s = $cmsInterface;
    }


    public function create()
    {
        return view('Admin.Cms.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $slug = Str::slug($data['title']);
        $slug_count = DB::table('cms')->where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = random_int(100000, 999999) . '-' . $slug;
        }
        $data['slug'] = $slug;
        if ($request->has('image')) {
            $file = $request->file('image');
            $db_image = time() . rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->storeAs("public/CmsImage", $db_image);
            $data['image'] = $db_image;
        }

        DB::table('cms')->insert($data);
        return back()->with('msg', 'Created');

    }

    public function cmsAboutpage()
    {
        $data['aboutPage'] = $this->cms_s->getAboutPage();
        return view('Admin.Cms.aboutPage', $data);
    }

    public function cmsHomepage()
    {
        $data['homePage'] = $this->cms_s->getHomePage();
        return view('Admin.Cms.homePage', $data);
    }
    public function cmsMotorCareerpage()
    {
        $data['MotorCareerPage'] = $this->cms_s->getMotorCareerPage();
        return view('Admin.Cms.motorCareerPage', $data);
    }

    public function edit($slug)
    {
        $data['the_cms'] = $this->cms_s->getCms($slug);
        return view('Admin.Cms.edit', $data);
    }


    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|string',
            'short_desc' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => [
                'nullable', File::types(['png', 'jpg', 'jpeg'])
                    ->max(12 * 1024),
            ]
        ]);
        $data = $request->only('title', 'short_desc', 'description', 'image');
        // dd($this->cms_s->updateCms($data, $slug));
        if ($this->cms_s->updateCms($data, $slug)['update'] == true) {
            switch ($this->cms_s->updateCms($data, $slug)['page']) {
                case 'home':
                    return redirect()->route('admin.cmsHomepage')->with('msg', 'Cms update successfully');
                    break;

                case 'about':
                    return redirect()->route('admin.cmsAboutpage')->with('msg', 'Cms update successfully');
                    break;

                case 'motorcareer':
                    return redirect()->route('admin.cmsMotorCareerpage')->with('msg', 'Cms update successfully');
                    break;

                default:
                    return back()->with('msg', 'Cms updated, but no page found!');
                    break;
            }
        }
    }

    public function siteShow()
    {
        $data['site_info'] = DB::table('site_infos')->where('slug', 'site-info-dotcsa')->first();
        return view('Admin.SiteInfo.siteinfo', $data);
    }

    public function siteUpdate(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string',
            // 'logo_image' => 'required',
            // 'favicon_image' => 'required',
            // 'address' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'twitter' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'pinterest' => 'nullable|string',
            'linkdin' => 'nullable|string',
        ]);
        $image = SiteInfo::where('slug', 'site-info-dotcsa')->select('logo_image', 'favicon_image')->first();
        $data = $request->except('_token', 'logo_image', 'favicon_image');

        if ($request->has('logo_image')) {
            $file = $request->file('logo_image');
            $db_logo_image = time() . rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->storeAs("public/SiteImage", $db_logo_image);
            FacadesFile::delete(public_path('storage/SiteImage/'. $image->logo_image));
            $data['logo_image'] = $db_logo_image;
        }

        if ($request->has('favicon_image')) {
            $file = $request->file('favicon_image');
            $db_favicon_image = time() . rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->storeAs("public/SiteImage", $db_favicon_image);
            FacadesFile::delete(public_path('storage/SiteImage/'. $image->favicon_image));

            $data['favicon_image'] = $db_favicon_image;
        }

        $update = SiteInfo::where('slug', 'site-info-dotcsa')->update($data);
        if($update) {
            return back()->with('msg', 'Site Information Updated successfully');
        }else{
            return back()->with('msg', 'No Changes Done');
        }

    }
}