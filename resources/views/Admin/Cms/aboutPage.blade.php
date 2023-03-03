@extends('Admin.Main.mainLayout')
@section('title', 'About-CMS | DOTCSA')
@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left">
                        <h6 class="text-medium mb-30">All Home Page Cms</h6>
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table top-selling-table">
                        <thead>
                            <tr>
                                <th>
                                    <h6 class="text-sm text-medium">Title</h6>
                                </th>

                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Short Description<i class="lni lni-arrows-vertical"></i>
                                    </h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Image <i class="lni lni-arrows-vertical"></i>
                                    </h6>
                                </th>

                                <th>
                                    <h6 class="text-sm text-medium text-end">
                                        Actions <i class="lni lni-arrows-vertical"></i>
                                    </h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aboutPage as $page)
                                <tr>
                                    <td>
                                        <div class="product">

                                            <p class="text-sm">{{ $page->title }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $page->short_desc }}</p>
                                    </td>
                                    <td>
                                        @if (!empty($page->image))
                                            <img src="{{ asset('storage/CmsImage/' . $page->image) }}" height="50px" width="50px" rel="noopener noreferrer" class="download-icon text-success" />
                                               
                                           
                                        @else
                                            <p class="text-danger">No Doc</p>
                                        @endif
                                    </td>
                                    
                                    <td>
                                        <div class="action justify-content-end">
                                            <a href="{{ route('cms.edit', $page->slug) }}" class="edit">
                                        <i class="lni lni-pencil"></i>
                                    </a>
                                          


                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table -->
                </div>
            </div>
        </div>
    </div>
@endsection
