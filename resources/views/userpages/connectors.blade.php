@extends('layouts.app')
@section('content')
    <div class="wrapper d-flex flex-column h-100">
        <div class="main-wrapper">
            <div class="theme-orange m-2" style="display: flex; justify-content: space-between; align-items: center;">
                <h1 style="margin-left: 20px;">Exchange Connector</h1>
                <button type="button " class="btn text-white" style="margin-right: 20px; background-color:rgb(80, 101, 246);"
                    data-bs-toggle="modal" data-bs-target="#exchangeConnectorModal">
                    Add Exchange Connector
                </button>
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
                        @forelse ($connectors as $connector)
                            <tr>
                                <td style="padding: 5px;">
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">{{ $connector->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td style="padding: 5px;">
                                    <p class="fw-normal mb-1">{{ $connector->exchange_name }}</p>
                                </td>
                                <td style="padding: 5px; vertical-align: middle;" colspan="2">
                                    <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;">
                                        Edit
                                    </button>
                                    <button type="button" class="btn text-white btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteConnectorModal" data-connector-id="{{ $connector->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exchangeConnectorModal" tabindex="-1" aria-labelledby="exchangeConnectorModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exchangeConnectorModalLabel">Add Exchange Connector</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="connectorForm">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Connector Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exchange_name" class="form-label">Exchange Name</label>
                            <select class="form-select" id="exchange_name" name="exchange_name">
                                <option value="Deribit Test">Deribit Test</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="public_key" class="form-label">Public Key</label>
                            <input type="text" class="form-control" id="public_key" name="public_key" required>
                        </div>
                        <div class="mb-3">
                            <label for="private_key" class="form-label">Private Key</label>
                            <input type="password" class="form-control" id="private_key" name="private_key" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="submitBtnConnector" class="btn btn-primary">Create Connector</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Delete Exchange Connector Modal -->
    <div class="modal fade" id="deleteConnectorModal" tabindex="-1" aria-labelledby="deleteConnectorModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConnectorModalLabel">Delete Exchange Connector</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this exchange connector? <strong>All associated bots will also be
                            permanently deleted.</strong></p>
                </div>
                <div class="modal-footer">
                    <form id="deleteConnectorForm" method="POST">
                        @csrf
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn text-white btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script>
        $('#deleteConnectorModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var connectorId = button.data('connector-id'); // Extract info from data-* attributes
            var formAction = '{{ route('connector.delete', ['id' => 'connectorId']) }}';
            formAction = formAction.replace("connectorId", connectorId);
            var modal = $(this);
            modal.find('#deleteConnectorForm').attr('action', formAction);
        });
    </script>
@endpush
