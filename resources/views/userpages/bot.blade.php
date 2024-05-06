@extends('layouts.app')
@section('content')
<div class="wrapper d-flex flex-column h-100">
    <div class="main-wrapper">
        <div class="theme-orange m-2" style="display: flex; justify-content: space-between; align-items: center;">
            <h1 style="margin-left: 20px;">Bot Management</h1>
            <button type="button" class="btn"
                style="margin-right: 20px; background-color:rgb(80, 101, 246); color:white" data-bs-toggle="modal"
                data-bs-target="#botModal">
                Add Bot
            </button>
        </div>
        <div style="display: flex;">
            <table class="table align-middle mb-0 ms-3 bg-white" style="padding: 5px;">
                <thead class="bg-light">
                    <tr>
                        <th>Bot Name</th>
                        <th>Exchange</th>
                        <th>Symbol</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bots as $bot)
                    <tr>
                        <td style="padding: 5px;">
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">{{ $bot->name }}</p>
                                </div>
                            </div>
                        </td>
                        <td style="padding: 5px;">
                            {{-- <p class="fw-normal mb-1">{{ $bot->exchange->name }}</p> --}}
                        </td>
                        <td style="padding: 5px;">
                            <p class="fw-normal mb-1">{{ $bot->symbol }}</p>
                        </td>
                        <td style="padding: 5px; vertical-align: middle;">
                            <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm" onclick="deleteBot({{ $bot->id }})">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bot Modal -->
<div class="modal fade" id="botModal" tabindex="-1" aria-labelledby="botModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="botModalLabel">Add Bot</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="botForm">
                    @csrf
                    <div class="mb-3">
                        <label for="bot_name" class="form-label">Bot Name</label>
                        <input type="text" class="form-control" id="bot_name" name="bot_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exchange_connector" class="form-label">Exchange Connector</label>
                        <select class="form-select" id="exchange_connector" name="exchange_connector" required>
                            <option value="">Select Exchange Connector</option>
                            @foreach ($connectors as $connector)
                            <option value="{{ $connector->id }}">{{ $connector->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="symbol" class="form-label">Symbol</label>
                        <select class="form-select" id="symbol" name="symbol" required>
                            <option value="">Select Symbol</option>
                            @foreach ($symbols as $symbol)
                            <option value="{{ $symbol->symbol }}">{{ $symbol->symbol }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="strategy" class="form-label">Strategy</label>
                        @if ($strategies->isEmpty())
                            <p>Please add a strategy from the market.</p>
                            <a href="" class="btn btn-primary">Go to Market</a>
                        @else
                            <select class="form-select" id="strategy" name="strategy" required>
                                <option value="">Select Strategy</option>
                                @foreach ($strategies as $strategy)
                                    <option value="{{ $strategy->id }}">{{ $strategy->name }}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="submitBtnBot" class="btn btn-primary">Create Bot</button>
            </div>
        </div>
    </div>
</div>
@endsection
