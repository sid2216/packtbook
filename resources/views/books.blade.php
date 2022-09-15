<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<title></title>
</head>
<body>
	@if(!empty($book))
@foreach($book as $books)
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$books['title']}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$books['concept']}}</h6>
    <p class="card-text">{{$books['publication_date']}}</p>
    <p class="card-text">{{$books['language']}}</p>
    <p class="card-text">{{$books['tool']}}</p>
    <p class="card-text">{{$books['vendor']}}</p>
    @foreach($books['authors'] as $author)
    <p class="card-link">{{$author}}</p>
    @endforeach
    @foreach($books['categories'] as $category)
    <p class="card-link">{{$category}}</p>
    @endforeach
  </div>
</div>

@endforeach
@endif
{{$book->appends($_GET)->links() }}

</body>

</html>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>