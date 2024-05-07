@extends('layouts.app')

@section('content')
<div class="wrapper d-flex flex-column h-100">
    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="explore-list-items">
                        <div class="row featured-filter" id="MixItUp72DBFA">
                            @foreach($strategies as $strategy)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix {{ $strategy->category }}">
                                <div class="main-card mt-30">
                                    <a href="item_view.html" class="nft-img">
                                        <img src="{{ asset('images/btcprepstrategy.jpg') }}" alt="">
                                    </a>
                                    <div class="item-detail-group">
                                        <div class="item-creators-options">
                                            <div class="item-creators-group">
                                                <div>
                                                    <h5>{{ $strategy->name }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-text-dt">
                                            <a href="#" class="item-title">Owned</a>
                                            <div class="item-text-bottom">
                                                <button type="button" class="btn btn-danger text-white remove-strategy" data-bs-toggle="modal"
                                                        data-bs-target="#removeStrategyModal" data-strategy-id="{{ $strategy->id }}">
                                                    Remove Strategy
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="col-sm-12 text-center">
                                <button class="main-btn btn-hover h-40 mt-5 mb-3">Load More</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Remove Strategy Modal -->
    <div class="modal fade" id="removeStrategyModal" tabindex="-1" aria-labelledby="removeStrategyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="removeStrategyModalLabel">Confirm Strategy Removal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to remove this strategy?
                </div>
                <div class="modal-footer">
                    <form id="removeStrategyForm" action="" method="POST">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn text-white btn-danger">Remove</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        // When the remove button is clicked, set the form action
        $(document).ready(function() {
            $('#removeStrategyModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var strategyId = button.data('strategy-id'); // Extract info from data-* attributes
                var formAction = '{{ route("user.remove_strategy", ["id" => "strategyId"]) }}';
                formAction = formAction.replace("strategyId", strategyId);
                var modal = $(this);
                modal.find('#removeStrategyForm').attr('action', formAction);
            });
        });
    </script>
@endpush
