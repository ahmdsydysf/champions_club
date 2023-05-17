@extends('web.layout.app')
@section('custom_css')
<style>
    button.submit-btn.reg {
        border: none;
        background: #f65935;
        color: #fff;
        height: 54px;
        border: 1px solid #eaebee;
        padding: 0 40px;
        font-weight: 600;
    }

    button.submit-btn.reg:hover {
        border: none;
        background: #405089;
        color: #fff;
        height: 54px;
        border: 1px solid #405089;
        padding: 0 40px;
        font-weight: 600;
    }

    .post-content {
        background-color: #dee2e6;
        border-radius: 5px;
        margin-bottom: 25px;
        padding: 35px;
    }

    h4 span,
    h5 span {
        color: #526199;
    }
</style>
@endsection
@section('content')
<section class="page-header">
    <div class="container">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('main.Home') }}</a></li>

            <li class="breadcrumb-item active" aria-current="page">{{ __('main.Profile') }}</li>
        </ol>
        <h2>{{ __('main.Child Profile') }}</h2>
        <p>{{ __('main.Profile title') }}</p>
    </div>
    <!-- end container -->
</section>
<!-- end page-header -->
<section class="blog">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <aside class="sidebar pull-left">
                    <div class="widget categories">
                        <h4 class="widget-title">{{ __('main.Profile') }}</h4>
                        <ul>

                            <li class="{{ Request::segment(3) == 'childProfile' ? 'active' : '' }}"><a
                                    href="{{ route('childProfile' , $child->id ) }}">{{ __('main.Profile Info') }}</a>
                            </li>
                            <li class="{{ Request::segment(3) == 'mySports' ? 'active' : '' }}"><a
                                    href="{{ route('childSports', $child->id) }}">{{ __('main.My Sports') }}</a></li>
                            <li class="{{ Request::segment(3) == 'sportsDiet' ? 'active' : '' }}">
                                <a href="{{ route('childSportDiet' , ['child_id'=>$child->id]) }}">
                                    {{ __('main.Your diet plan') }}
                                </a>
                            </li>
                        </ul>
                        <!-- end side-menu -->
                    </div>
                    <!-- end widget -->

                    <style>

                    </style>

                </aside>
                <!-- end side-bar -->
            </div>
            <!-- end col-4 -->
            <div class="col-md-8 col-12">
                <section class="blog">
                    <div class="container">

                        {{-- @dd($child->name) --}}
                        <div class="row justify-content-center">
                            <div class="child-full-data row">
                                {{-- هجيب الطفل و الميمبرشيب الخاصبيه ومنها هجيب الانفويس واتشيك علي الستيتس --}}

                                {{-- @if ($invo->invoice_status == 1) --}}
                                <div class="col-12 ">
                                    <aside class="sidebar post-content"
                                        style="max-width: 100%;position:relative !important">
                                        <div class="widget categories">
                                            <form action="{{ route('childUpdate' ,$child->id ) }}"
                                                enctype="multipart/form-data" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <h4 class="widget-title"><span>
                                                        <input id="name" name="name" type="text"
                                                            class="mt-1 block w-full" value="{{ $child->name }}"
                                                            required autofocus autocomplete="name" />
                                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />

                                                    </span></h4>

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="content-box wow fadeIn col-6"
                                                            style="visibility: visible; animation-name: fadeIn;">
                                                            <figure><img style="height: 250px;width:100%"
                                                                    src="{{ asset('uploads/children_data/' . $child->personal_image) }}"
                                                                    alt="Image">
                                                            </figure>
                                                            <div>
                                                                <label for="formFileLg1" class="form-label">{{
                                                                    __('main.Change Image') }}</label>
                                                                <input class="form-control form-control-lg"
                                                                    name="personal_image" id="formFileLg1" type="file">
                                                            </div>
                                                            <x-input-error :messages="$errors->get('personal_image')"
                                                                class="mt-2" />
                                                        </div>
                                                        <div class="content-box wow fadeIn col-6"
                                                            style="visibility: visible; animation-name: fadeIn;">
                                                            <figure><img style="height: 250px;width:100%"
                                                                    src="{{ asset('uploads/children_data/' . $child->birth_image) }}"
                                                                    alt="Image">
                                                            </figure>
                                                            <div>
                                                                <label for="formFileLg" class="form-label">{{
                                                                    __('main.Change Image') }}</label>
                                                                <input class="form-control form-control-lg"
                                                                    name="birth_image" id="formFileLg" type="file">
                                                            </div>
                                                            <x-input-error :messages="$errors->get('birth_image')"
                                                                class="mt-2" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row">
                                                        <h5 class="widget-title col-6">{{ __('main.Birthdate') }} :

                                                            <input data-reset='on' value="{{ $child->birthdate }}"
                                                                type="date" name="birthdate"
                                                                class="form-control important-input"
                                                                id="inputPassword4">
                                                            <x-input-error class="mt-2"
                                                                :messages="$errors->get('birthdate')" />

                                                        </h5>
                                                        <h5 class="widget-title col-6">{{ __('main.Level') }} :
                                                            <select id="level" name="level"
                                                                class="form-control custom-select important-input">
                                                                <option value="1" {{ $child->level == 1 ? 'selected' :
                                                                    '' }} >{{ __('main.Amateur') }}
                                                                </option>
                                                                <option value="2" {{ $child->level == 2 ? 'selected' :
                                                                    '' }} >{{ __('main.Mid level') }}</option>
                                                                <option value="3" {{ $child->level == 3 ? 'selected' :
                                                                    '' }} >{{ __('main.Professional') }}</option>
                                                            </select>
                                                            <x-input-error class="mt-2"
                                                                :messages="$errors->get('level')" />

                                                        </h5>
                                                        <h5 class="widget-title col-6">{{ __('main.Height') }} :
                                                            <input id="height" name="height" type="text"
                                                                class="mt-1 block w-full" value="{{ $child->height }}"
                                                                required autofocus autocomplete="name" />
                                                            <x-input-error class="mt-2"
                                                                :messages="$errors->get('height')" />

                                                        </h5>
                                                        <h5 class="widget-title col-6">{{ __('main.Weight') }} :
                                                            <input id="width" name="weight" type="text"
                                                                class="mt-1 block w-full" value="{{ $child->width}}"
                                                                required autofocus autocomplete="name" />
                                                            <x-input-error class="mt-2"
                                                                :messages="$errors->get('width')" />

                                                        </h5>

                                                        <x-primary-button>{{ __('main.Update') }}</x-primary-button>
                                            </form>
                                        </div>
                                </div>
                                <!-- end side-menu -->

                                <!-- end side-menu -->
                            </div>

                            </aside>
                            <!-- end side-bar -->
                        </div>


                    </div>
            </div>
            <!-- end col-8 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

</section>
@endsection