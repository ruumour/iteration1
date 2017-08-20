<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header" style="margin-top:0">Search</h5>
        <div class="card-body">
        <form method="POST" action="/searchResults">
        {{ csrf_field() }} 
            <div class="input-group">                      
                <input type="text" class="form-control" name="search" >
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Go!</button>
                </span>
                </input>
                
            </div>
        </form>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row" style="margin-left:10px;">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li><a href="/request?type=exhibitions">Exhibitions</a></li>
                        <li><a href="/request?type=concerts">Concerts</a></li>
                        <li><a href="/request?type=festivals">Festivals</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li><a href="/request?type=arts">Arts</a></li>
                        <li><a href="/request?type=workshops">Workshops</a></li>
                        <li><a href="/request?type=sports">Sports</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card my-4">
        <h5 class="card-header">Suburb</h5>
        <div class="card-body">
            <div class="row" style="margin-left:10px;">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li><a href="/request?Suburb=MEL+City">MEL City</a></li>
                        <li><a href="/request?Suburb=Caulfield">Caulfield</a></li>
                        <li><a href="/request?Suburb=Clayton">Clayton</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li><a href="/request?Suburb=Monash">Monash</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>