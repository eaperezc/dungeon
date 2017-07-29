@extends('layouts.app')

@section('content')
<div id="board" class="container-fluid">
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Ready</h3>
            </div>
            <div class="panel-body">
                <ul class="sortable-board connected-sortable">
                    <li>
                        <div class="board-card">
                            <p><a href="$">TID-0934</a> - This is a user story that will do something cool!</p>
                            <p style="color:#999;font-size:0.9em;">
                                <i class="fa fa-check-square" aria-hidden="true"></i> 6 - 
                                <i class="fa fa-paperclip" aria-hidden="true"></i> 5 - 
                                <i class="fa fa-clock-o" aria-hidden="true"></i> Oct 20
                            </p>
                            <p><span class="label label-primary">Billing</span></p>
                        </div>

                    </li>
                    <li>

                        <div class="board-card">
                            <p><a href="$">TID-8345</a> - Simple ticket</p>
                            <p style="color:#999;font-size:0.9em;">
                                <i class="fa fa-paperclip" aria-hidden="true"></i> 5
                            </p>
                        </div>

                    </li>
                    <li>

                        <div class="board-card">
                            <p><a href="$">TID-1643</a> - OMG the billing process will support bitcoins... or not</p>
                            <p style="color:#999;font-size:0.9em;">
                                <i class="fa fa-check-square" aria-hidden="true"></i> 6 - 
                                <i class="fa fa-paperclip" aria-hidden="true"></i> 5
                            </p>
                            <p><span class="label label-danger">Bug</span></p>
                        </div>

                    </li>

                    <li>
                        <div class="board-card">
                            <p><a href="$">TID-0434</a> - Maybe we should do something about this</p>
                            <p style="color:#999;font-size:0.9em;">
                                <i class="fa fa-check-square" aria-hidden="true"></i> 6 - 
                                <i class="fa fa-clock-o" aria-hidden="true"></i> Jul 05
                            </p>
                            <p><span class="label label-warning">Feature</span></p>
                            <div class="avatar">
                                <img src="https://www.gravatar.com/avatar/f9ad9b22f36717f0df75ea87e8b76753">
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">In Progress</h3>
            </div>
            <div class="panel-body">
                <ul class="sortable-board connected-sortable">
                </ul>
            </div>
        </div>
    </div>


    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Testing</h3>
            </div>
            <div class="panel-body">
                <ul class="sortable-board connected-sortable">

                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Done!</h3>
            </div>
            <div class="panel-body">
                <ul class="sortable-board connected-sortable">
                    <li>
                        <div class="board-card">
                            <p><a href="$">TID-3765</a> - This is done! At last!</p>
                            <p style="color:#999;font-size:0.9em;">
                                <i class="fa fa-check-square" aria-hidden="true"></i> 52 - 
                                <i class="fa fa-paperclip" aria-hidden="true"></i> 2
                            </p>
                            <p><span class="label label-success">Feature</span></p>
                        </div>
                    </li>

                    <card></card>
                    <card></card>
                    <card></card>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('stylesheets')
    <script src="https://use.fontawesome.com/308fb7ab27.js"></script>
@endsection

@section('scripts')

    {{-- jQuery --}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $(".sortable-board").sortable({
                placeholder: "ui-state-highlight",
                connectWith: ".connected-sortable"
            }).disableSelection();
        });
    </script>
@endsection
