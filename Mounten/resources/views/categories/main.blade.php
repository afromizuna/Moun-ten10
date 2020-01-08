<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Moun-ten10</title>
  <link rel="stylesheet" href="/css/styles.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
  <header>
    <nav class="my-navbar">
      <a class="my-navbar-brand" href="/main">Moun-ten10</a>
    </nav>
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col col-md-4">
          <nav class="panel pnel-default">
            <div class="dropdown">
              <h4>MTBのパーツを検索</h4>
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                パーツ名を選択
               </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($categories as $category)
                  <a href="{{ route('results.result',['id' => $category->id]) }}" class="dropdown-item">{{ $category->part_name }}</a>
                @endforeach
              </div>
            </nav>
          </div>
        <div class="column col-md-8">
            <div class="panel panel-defaulet">
                <div class="panel-heading">　　←【パーツ名を選択】ボタンから検索したいパーツを選択</div>
            </div>
        </div>
      </div>
      </div>
    </div>
  </main>
</html>
