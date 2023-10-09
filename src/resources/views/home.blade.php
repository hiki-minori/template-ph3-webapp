
<x-user-layout>
<!-- <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>POSSE</title>
</head> -->
<body>
    array_diff_assoc
  <header class="header">
    <div class="d-lg-flex header-container mx-auto">
      <div class="d-flex">
        <img src="/img/header-logo.png" class="header-img pr-3">
        <p class="header-text my-auto">th week</p>
      </div>
      <button class="post-btn mr-0 ml-auto my-auto d-none d-lg-block" data-toggle="modal" data-target="#modalPost">記録・投稿</button>
    </div>
  </header>

  <main>
    <div class="main-container mx-auto">
      <div class="cards d-lg-flex justify-content-between">

        <div class="left-cards">
          <div class="time-cards d-flex justify-content-between">
            <div class="card today-card text-center">
              <p class="time-cards-title mt-2 mt-lg-3 mb-0">Today</p>
              <p class="font-weight-bold h2 lg-h1 my-1 my-lg-2"></p>
              <p class="mb-2 mb-lg-3 text-muted hour">hour</p>
            </div>

            <div class="card month-card text-center">
              <p class="time-cards-title mt-2 mt-lg-3 mb-0">Month</p>
              <p class="font-weight-bold h2 lg-h1 my-1 my-lg-2"></p>
              <p class="mb-2 mb-lg-3 text-muted hour">hour</p>
            </div>

            <div class="card total-card text-center">
              <p class="time-cards-title mt-2 mt-lg-3 mb-0">Total</p>
              <p class="font-weight-bold h2 lg-h1 my-1 my-lg-2"></p>
              <p class="mb-2 mb-lg-3 text-muted hour">hour</p>
            </div>
          </div>

          <hr class="d-lg-none">

          <div class="card time-graph-card">
            <div id="pc_columnchart_values" class="d-none d-lg-block"></div>
            <div id="sp_columnchart_values" class="d-block d-lg-none"></div>
          </div>
        </div>

        <div class="right-cards d-flex justify-content-between">
          <div class="card language-card">
            <div class="language-card-container">
              <p class="font-weight-bold pt-4 lg-h5 mb-0">学習言語</p>
              <div id="language_piechart"></div>
              <div class="language-tag">

                <p>
                  <span class="circle" ></span>
                  <span class="text-nowrap mr-2"></span>
                </p>

              </div>
            </div>
          </div>
          <div class="card contents-card">
            <div class="contents-card-container">
              <p class="font-weight-bold pt-4 lg-h5 mb-0">学習コンテンツ</p>
              <div id="contents_piechart"></div>
              <p class="contents-tag">

              <p>
                <span class="circle" ></span>
                <span class="text-nowrap mr-2"></span>
              </p>

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="mt-3 mt-lg-4 main-container mx-auto">
    <p class="text-center font-weight-bold"><span class="pr-3" id="prev">&lt;</span><span id="thisMonth"></span><span class="pl-3" id="next">&gt;</span></p>

    <button class="post-btn mx-auto d-block d-lg-none" data-toggle="modal" data-target="#modalPost">記録・投稿</button>
</form>
  </footer>

  <!-- modal main -->
  <div class="modal fade" id="modalPost" tab-index="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-container">
          <form id="form1">
            <input id="contents1" type="checkbox" value="1" name="contents[]">
            <input id="contents2" type="checkbox" value="2" name="contents[]">
            <input id="contents3" type="checkbox" value="3" name="contents[]">
            <input id="language1" type="checkbox" value="1" name="languages[]">
            <input id="language2" type="checkbox" value="2" name="languages[]">
            <input id="language3" type="checkbox" value="3" name="languages[]">
            <input id="language4" type="checkbox" value="4" name="languages[]">
            <input id="language5" type="checkbox" value="5" name="languages[]">
            <input id="language6" type="checkbox" value="6" name="languages[]">
            <input id="language7" type="checkbox" value="7" name="languages[]">
            <input id="language8" type="checkbox" value="8" name="languages[]">

            @csrf
            <div class="form-group d-lg-flex justify-content-between">
              <div class="modal-left-parts">
                <div class="modal-date-part">
                  <p class="font-weight-bold modal-title">学習日</p>
                  <input type="text" id="studyDate" data-toggle="modal" data-target="#modalCalendar" name="date" readonly>
                </div>
                <div class="modal-contents-pc-part d-none d-lg-block pt-3">
                  <p class="font-weight-bold modal-title">学習コンテンツ (複数選択可)</p>
                  <input id="contents1" type="checkbox" value="1" name="contents[]">
                  <label for="contents1">ドットインストール</label>
                  
                  <input id="contents2" type="checkbox" value="2" name="contents[]">
                  <label for="contents2">N予備校</label>

                  <input id="contents3" type="checkbox" value="3" name="contents[]">
                  <label for="contents3">POSSE課題</label>
                </div>

                <div class="modal-contents-sp-part d-block d-lg-none pt-3">
                  <p class="font-weight-bold modal-title">学習コンテンツ (複数選択可)</p>
                  <div class="modal-contents-select-box" id="modal-contents-select-box">
                    <select>
                      <option>N予備校</option>
                    </select>
                    <div class="modal-contents-over-select"></div>
                  </div>
                  <div id="modal-contents-check-box">
                    <input type="checkbox" id="contents4" value="1" name="contents[]">
                    <label for="contents4">ドットインストール</label>
                    
                    <input type="checkbox" id="contents5" value="2" name="contents[]">
                    <label for="contents5">N予備校</label>

                    <input type="checkbox" id="contents6" value="3" name="contents[]">
                    <label for="contents6">POSSE課題</label>
                  </div>
                </div>

                <div class="modal-language-pc-part d-none d-lg-block pt-3">
                  <p class="font-weight-bold modal-title">学習言語 (複数選択可)</p>
                  <input id="language1" type="checkbox" value="1" name="languages[]">
                  <label for="language1">HTML</label>

                  <input id="language2" type="checkbox" value="2" name="languages[]">
                  <label for="language2">CSS</label>

                  <input id="language3" type="checkbox" value="3" name="languages[]">
                  <label for="language3">JavaScript</label>

                  <input id="language4" type="checkbox" value="4" name="languages[]">
                  <label for="language4">PHP</label>

                  <input id="language5" type="checkbox" value="5" name="languages[]">
                  <label for="language5">Laravel</label>

                  <input id="language6" type="checkbox" value="6" name="languages[]">
                  <label for="language6">SQL</label>

                  <input id="language7" type="checkbox" value="7" name="languages[]">
                  <label for="language7">SHELL</label>

                  <input id="language8" type="checkbox" value="8" name="languages[]">
                  <label for="language8">情報システム基礎知識(その他)</label>
                </div>

                <div class="modal-language-sp-part d-block d-lg-none pt-3">
                  <p class="font-weight-bold modal-title">学習言語 (複数選択可)</p>
                  <div class="modal-language-select-box" id="modal-language-select-box">
                    <select>
                      <option>HTML</option>
                    </select>
                    <div class="modal-language-over-select"></div>
                  </div>
                  <div id="modal-language-check-box">
                    <input id="language9" type="checkbox" value="1" name="languages[]">
                    <label for="language9">HTML</label>

                    <input id="language10" type="checkbox" value="2" name="languages[]">
                    <label for="language10">CSS</label>

                    <input id="language11" type="checkbox" value="3" name="languages[]">
                    <label for="language11">JavaScript</label>

                    <input id="language12" type="checkbox" value="4" name="languages[]">
                    <label for="language12">PHP</label>

                    <input id="language13" type="checkbox" value="5" name="languages[]">
                    <label for="language13">Laravel</label>

                    <input id="language14" type="checkbox" value="6" name="languages[]">
                    <label for="language14">SQL</label>

                    <input id="language15" type="checkbox" value="7" name="languages[]">
                    <label for="language15">SHELL</label>

                    <input id="language16" type="checkbox" value="8" name="languages[]">
                    <label for="language16">情報システム基礎知識(その他)</label>
                  </div>
                </div>
              </div>
              <div class="modal-right-parts pt-3 pt-lg-0">
                <div class="modal-time-part">
                  <p class="font-weight-bold modal-title">学習時間</p>
                  <input type="text" name="hour">
                </div>
                <div class="modal-twitter-part pt-3">
                  <p class="font-weight-bold modal-title">Twitter用コメント</p>
                  <textarea id="postTwitter" cols="0" rows="9" name="twittertext"></textarea>
                </div>
                <div class="modal-twitter-auto-part pt-1">
                  <input id="twitter" type="checkbox" checked name="twitter"><label for="twitter">Twitterに自動投稿する</label>
                </div>
              </div>
            </div>
            <button type="button" class="post-btn d-block mx-auto mt-3 mb-4" id="button1">記録・投稿</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- modal main -->

  <!-- modal calendar -->
  <div class="modal fade" id="modalCalendar" tab-index="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&larr;</span>
        </button>
        <div class="modal-container">
          <div class="modal-calendar">
            <table>
              <thead>
                <tr>
                  <th id="calendarPrev" colspan="2">&lt;</th>
                  <th id="calendarThisMonth" colspan="3"></th>
                  <th id="calendarNext" colspan="2">&gt;</th>
                </tr>
                <tr class="calendar-day">
                  <th>Sun</th>
                  <th>Mon</th>
                  <th>Tue</th>
                  <th>Wed</th>
                  <th>Thu</th>
                  <th>Fri</th>
                  <th>Sat</th>
                </tr>
              </thead>

              <tbody id="calendar-tbody">
              </tbody>
            </table>
            <button type="button" class="post-btn d-block mx-auto mt-4" id="decideCalendar">決定</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal calendar -->

  <!-- modal loading -->
  <div class="modal fade" id="modalLoading" tab-index="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-container">
          <div class="loader-wrap">
            <div class="loader">Loading...</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal loading -->

  <!-- modal success -->
  <div class="modal fade" id="modalSuccess" tab-index="-1" aria-hidden="true">
    <div class="modal-dialog modal-success-dialog">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-container text-center">
          <p class="modal-success-color">AWESOME!</p>
          <span class="modal-success-color modal-check-mark"></span>
          <p>記録・投稿<br>完了しました</p>
        </div>
      </div>
    </div>
  </div>
  <!-- modal success -->

    <!-- modal success -->
    <div class="modal fade" id="modalError" tab-index="-1" aria-hidden="true">
    <div class="modal-dialog modal-success-dialog">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-container text-center">
          <p class="modal-success-color">AWESOME!</p>
          <span class="modal-success-color modal-check-mark"></span>
          <p>エラーです</p>
        </div>
      </div>
    </div>
  </div>
  <!-- modal success -->



</body>
</html>

</x-user-layout>