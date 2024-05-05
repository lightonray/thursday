@extends('layouts.app')
@section('content')
    <div class="wrapper d-flex flex-column h-100">
        <div class="main-wrapper">
            <div class="theme-orange m-2" style="display: flex; justify-content: space-between; align-items: center;">
                <h1 style="margin-left: 20px;">Exchange Connector</h1>
                <button type="button" class="btn" style="margin-right: 20px; background-color:rgb(80, 101, 246); color:white">Add Exchange Connector</button>
            </div>
            <div style="display: flex;">
                <table class="table align-middle mb-0 ms-3 bg-white" style="padding: 5px;">
                    <thead class="bg-light">
                        <tr>
                            <th>Connector Name</th>
                            <th>Exchange</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 5px;">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">John Doe</p>
                                        <p class="text-muted mb-0">john.doe@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding: 5px;">
                                <p class="fw-normal mb-1">Software engineer</p>
                                <p class="text-muted mb-0">IT department</p>
                            </td>
                            <td style="padding: 5px; vertical-align: middle;" colspan="2">
                                <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Alex Ray</p>
                                        <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding: 5px;">
                                <p class="fw-normal mb-1">Consultant</p>
                                <p class="text-muted mb-0">Finance</p>
                            </td>
                            <td style="padding: 5px; vertical-align: middle;" colspan="2">
                                <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 5px;">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Kate Hunington</p>
                                        <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding: 5px;">
                                <p class="fw-normal mb-1">Designer</p>
                                <p class="text-muted mb-0">UI/UX</p>
                            </td>
                            <td style="padding: 5px; vertical-align: middle;" colspan="2">
                                <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
