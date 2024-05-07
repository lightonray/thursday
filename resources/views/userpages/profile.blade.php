@extends('layouts.app')
@section('content')
    <div class="wrapper d-flex flex-column h-100">
        <div class="main-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="main-card text-center">
                            <div class="hero-cover-block">
                                <div class="hero-cover">
                                    <div class="hero-cover-img">
                                        <img src="{{ asset('images/coverpic.jpg') }}" alt="" style="width: 100%; height: 300px;">
                                    </div>
                                </div>
                                <div class="author-avatar-block">
                                    <div class="author-dp-dt">
                                        <div class="author-dp">
                                            <div class="author-img">
                                                <img src="{{ asset('images/profilepic.jpg') }}" alt="" style="width: 100%; height: 130px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-author-dt-block">
                                <div class="hero-author-dt">
                                    <div class="author-name-title">{{ $userprofile->name }}</div>
                                    <div class="author-username">
                                        @if(!empty($userprofile->profile->username))
                                            <span class="badge-username">{{ $userprofile->profile->username }}</span>
                                        @endif
                                    </div>
                                    <div class="author-description">
                                        @if(!empty($userprofile->profile->bio))
                                            {{ $userprofile->profile->bio }}
                                        @endif
                                    </div>
                                    <ul class="author-buttons">
                                        <li><button class="main-btn btn-hover h-40" data-bs-toggle="modal"
                                                data-bs-target="#editprofileModal">Edit Profile</button></li>
                                        <li>
                                            <a href="#" class="option-btn" role="button" data-bs-toggle="modal"
                                                data-bs-target="#shareModal">
                                                <i class="uil uil-share-alt"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="option-btn" role="button" data-bs-toggle="dropdown"
                                                data-bs-auto-close="outside" aria-expanded="false">
                                                <i class="uil uil-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu item-dropdown dropdown-menu-end">
                                                <a class="dropdown-item" href="#" role="button"
                                                    data-bs-toggle="modal" data-bs-target="#reportModal">Report</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
