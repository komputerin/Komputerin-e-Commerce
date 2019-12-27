<form action="{{ route('search') }}" method="GET" class="col-sm-12">
    <div class="search_box pull-right">
        <input type="text" name="query" id="query" value="{{request()->input('query')}}" class="search-box" placeholder="Search Product" style="width: 300px" />
    </div>
</form>