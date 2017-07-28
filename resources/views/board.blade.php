<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dungeon</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://use.fontawesome.com/308fb7ab27.js"></script>

        <!-- Styles -->
        <style>
        	body {
        		padding-top: 15px;
        	}
			.sortable-board {
				width: 100%;
				min-height: 60px;
				list-style-type: none;
				margin: 0;
				padding: 5px 0 0 0;
				float: left;
				color: #555;
			}
			.sortable-board li {
				margin: 5px 5px 15px 5px;
				padding: 5px;
				font-size: 1.1em;
				width: 100%;
				background: white;
				border: 1px solid gray;
				-webkit-box-shadow: 10px 10px 5px -4px rgba(227,227,227,0.63);
				-moz-box-shadow: 10px 10px 5px -4px rgba(227,227,227,0.63);
				box-shadow: 10px 10px 5px -4px rgba(227,227,227,0.63);
				
				cursor: move; /* fallback if grab cursor is unsupported */
			    cursor: grab;
			    cursor: -moz-grab;
			    cursor: -webkit-grab;
			}
			.ui-state-highlight { 
				height: 5em; 
				line-height: 1.2em; 
				background: #e2e2e2 !important;
				border: 0 !important;

				-webkit-box-shadow: none !important;
				-moz-box-shadow: none !important;
				box-shadow: none !important;
				
				cursor: grabbing;
			    cursor: -moz-grabbing;
			    cursor: -webkit-grabbing;
			}
			.panel-body {
				padding-right: 20px;
				background: #f5f5f5;
			}
			.board-card {
				padding: 10px;
				position: relative;
			}
			.avatar {
				position: absolute; 
				right: 10px; 
				bottom: 10px;
			}
			.avatar img {
				width: 40px;
			}
        </style>
    </head>
    <body>

    	<div class="container-fluid">

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
						</ul>
					</div>
				</div>
			</div>

		</div>


    	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


		<script>
			$( function() {
				$( ".sortable-board" ).sortable({
					placeholder: "ui-state-highlight",
					connectWith: ".connected-sortable"
				}).disableSelection();
			} );
		</script>

    </body>
</html>
