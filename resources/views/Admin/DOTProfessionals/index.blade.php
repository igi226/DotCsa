@extends('Admin.Main.mainLayout')
@section('title', 'DOT professional request | DOTCSA')
@section('content')
    <div class="row justify-content-center mt-4">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left">
                        <h6 class="text-medium mb-30">All DOT Professionals Requests</h6>
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
                                    <h6 class="text-sm text-medium">Name</h6>
                                </th>

                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Phone<i class="lni lni-arrows-vertical"></i>
                                    </h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Email <i class="lni lni-arrows-vertical"></i>
                                    </h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Address/Zipcode <i class="lni lni-arrows-vertical"></i>
                                    </h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        City <i class="lni lni-arrows-vertical"></i>
                                    </h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        State <i class="lni lni-arrows-vertical"></i>
                                    </h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Query date <i class="lni lni-arrows-vertical"></i>
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
                            @foreach ($dotProfessionals as $dotProfessional)
                                <tr>
                                    <td>
                                        <div class="product">
                                            <div class="image">
                                                @if (!empty($dotProfessional->profile_doc))
                                                    <a href="{{ asset('storage/DotProfessionalContent/' . $dotProfessional->profile_doc) }}"
                                                        rel="noopener noreferrer" class="download-icon text-success"><i
                                                            class="lni lni-download"></i></a>
                                                @else
                                                    <p class="text-danger">No Doc</p>
                                                @endif
                                            </div>
                                            <p class="text-sm">{{ $dotProfessional->name }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $dotProfessional->contact_number }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $dotProfessional->email }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">
                                            {{ $dotProfessional->address }}<br>{{ $dotProfessional->zipcode }} </p>

                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $dotProfessional->city }}</p>

                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $dotProfessional->state }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm">{{ $dotProfessional->created_at }}</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-end">
                                            {{-- <button class="edit">
                                            <i class="lni lni-trash-can"></i>
                                        </button> --}}
                                            <form method="POST"
                                                action="{{ route('dot-professionals.destroy', $dotProfessional->id) }}"
                                                class="action-icon d-inline-block pl-2">
                                                @csrf
                                                @method('DELETE')
                                                {{-- <input name="_method" type="hidden" value="DELETE"> --}}
                                                <button type="submit" class="show_confirm" data-toggle="tooltip"
                                                    title='Delete'>
                                                    <i class="lni lni-trash-can font-size-18 text-danger"></i>
                                                </button>
                                            </form>


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
