@extends('layouts.app')
@section('content')
<div class="content minfin">
    <div class="row">
      <div class="col-6">
          <div class="minfin-ostatok">
            <div class="minfin-ost-header">
              <div class="row no-gutters justify-content-between">
                <div class="col-9 ost-title">
                  Остаток Республиканского основного счета
                </div>
                <div class="col-3 ost-date">
                  <p><span>13:05</span>10.10.2019</p>
                </div>
              </div>
            </div>
            <div class="minginostchart">

            </div>
            <div class="row no-gutters minfinost-bottom">
              <div class="col-4">
                  <p><span>Сумма на начало года:</span>900 685 100 000 сом</p>
              </div>
              <div class="col-4">
                  <p><span>Сумма на начало текущего месяца:</span>900 685 100 000 сом</p>
              </div>
              <div class="col-4">
                  <p><span>Сумма на начало дня:</span>900 685 100 000 сом</p>
              </div>
            </div>
          </div>
          <div class="minfin-dohros row">
            <div class="col-4">
              <div class="dohros-header">Доход / Расход ГНС</div>
              <p class="dohros doh">+ 110 201 356</p>
              <p class="dohros ros">- 50 201 356</p>
              <span class="boh-bottom">План на месяц</span>
              <p class="dohros bottom">120 200 366 / - 50 200 366</p>
              <span class="boh-bottom">План на год</span>
              <p class="dohros bottom">2 120 200 366 / - 50 200 366</p>
            </div>
            <div class="col-4">
              <div class="dohros-header">Доход / Расход ГТС</div>
              <p class="dohros doh">+ 110 201 356</p>
              <p class="dohros ros">- 50 201 356</p>
              <span class="boh-bottom">План на месяц</span>
              <p class="dohros bottom">120 200 366 / - 50 200 366</p>
              <span class="boh-bottom">План на год</span>
              <p class="dohros bottom">2 120 200 366 / - 50 200 366</p>
            </div>
            <div class="col-4">
              <div class="dohros-header">Доходы неналоговые</div>
              <p class="dohros doh notax">+ 110 201 356</p>
              <span class="boh-bottom">План на месяц</span>
              <p class="dohros bottom">120 200 366 / - 50 200 366</p>
              <span class="boh-bottom">План на год</span>
              <p class="dohros bottom">2 120 200 366 / - 50 200 366</p>
            </div>
          </div>
          <div class="mingin-top-3 row">
            <div class="col-6 payers">
              <div class="mingin-top-header">Доход / Расход ГНС</div>
              <p>Плательщик 1<span>+ 120 258 658</span></p>
              <p>Плательщик 2<span>+ 120 258 658</span></p>
              <p>Плательщик 3<span>+ 120 258 658</span></p>
            </div>
            <div class="col-6 reciepts">
              <div class="mingin-top-header">Доход / Расход ГНС</div>
              <p>Получатель 1<span>+ 120 258 658</span></p>
              <p>Получатель 2<span>+ 120 258 658</span></p>
              <p>Получатель 3<span>+ 120 258 658</span></p>
            </div>
          </div>
      </div>
      <div class="col-6">
          <div class="row">
            <div class="col-6">
              <div class="gosdolg">
                <div class="mingin-top-header">Доход / Расход ГНС<span>тыс. сом</span></div>
                  <p class="minfin-top-dohros">300 744 061<span><i class="fas fa-long-arrow-alt-up"></i></span></p>
                  <div class="row">
                    <div class="col-6">
                      <p class="ex-dolg">Внешний<span>тыс. сом</span></p>
                      <span>900 685 100</span>
                    </div>
                    <div class="col-6">
                      <p class="ex-dolg">внутренний<span>тыс. сом</span></p>
                      <span>41 033 485</span>
                    </div>
                  </div>
                  <div class="minfin-profit-deficit">
                    <div class="mingin-prodef-header">Профицит / Дефицит<span>тыс. сом</span></div>
                  </div>
              </div>
              <div class="ras-by-functions">
                <div class="rasbyfunc-header">Расходы по функциям</div>
                  <div class="ras-by-func-content">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="ras-prog-content">
                        <p><span>701</span>Государственные службы общего назначения</p><span>10 564 980</span>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 23%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="ras-prog-content">
                        <p><span>701</span>Оборона</p><span>10 564 980</span>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="ras-prog-content">
                        <p><span>701</span>Общественный порядок и безопасность</p><span>10 564 980</span>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="ras-prog-content">
                        <p><span>701</span>Экономические вопросы</p><span>10 564 980</span>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="ras-prog-content">
                        <p><span>701</span>Охрана окружающей среды</p><span>10 564 980</span>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="ras-prog-content">
                        <p><span>701</span>Жилищные и коммунальные услуги</p><span>10 564 980</span>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="ras-prog-content">
                        <p><span>701</span>Здравоохранение</p><span>10 564 980</span>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="ras-prog-content">
                        <p><span>701</span>Отдых, культура и религия</p><span>10 564 980</span>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 44%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="ras-prog-content">
                        <p><span>701</span>Образование</p><span>10 564 980</span>
                      </div>
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="ras-prog-content">
                        <p><span>701</span>Социальная защита</p><span>10 564 980</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="tamozhnyi-soyuz">
                <div class="tamozhnyi-header">Таможенный союз<span>10.10.2019</span></div>
                <div class="tamozhyi-block">
                  <p>Социальная защита</p>
                   <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <span>10 564 980</span>
                      </div>
                    </div>
                    <div class="progress">
                       <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                           <span>10 564 980</span>
                       </div>
                     </div>
                  </div>
                  <div class="tamozhyi-block">
                    <p>ГТС КР в Октябрьском РОК</p>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <span>10 564 980</span>
                        </div>
                      </div>
                      <div class="progress">
                         <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                             <span>10 564 980</span>
                         </div>
                       </div>
                  </div>
                  <div class="tamozhyi-block">
                    <p>Восточная таможня</p>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <span>10 564 980</span>
                        </div>
                      </div>
                      <div class="progress">
                         <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                             <span>10 564 980</span>
                         </div>
                      </div>
                  </div>
                  <div class="tamozhyi-block">
                    <p>Оперативная таможня Юг</p>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <span>10 564 980</span>
                        </div>
                      </div>
                      <div class="progress">
                         <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                             <span>10 564 980</span>
                         </div>
                      </div>
                  </div>
                  <div class="tamozhyi-block">
                    <p>Таможня Баткен</p>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <span>10 564 980</span>
                        </div>
                      </div>
                      <div class="progress">
                         <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                             <span>10 564 980</span>
                         </div>
                      </div>
                  </div>
                  <div class="tamozhyi-block">
                    <p>Таможня Жалал-Абад</p>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <span>10 564 980</span>
                        </div>
                      </div>
                      <div class="progress">
                         <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                             <span>10 564 980</span>
                         </div>
                      </div>
                  </div>
                  <div class="tamozhyi-block">
                    <p>Таможня Манас</p>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <span>10 564 980</span>
                        </div>
                      </div>
                      <div class="progress">
                         <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                             <span>10 564 980</span>
                         </div>
                      </div>
                  </div>
                  <div class="tamozhyi-block">
                    <p>ЖД отделение таможня "Северная"</p>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <span>10 564 980</span>
                        </div>
                      </div>
                      <div class="progress">
                         <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                             <span>10 564 980</span>
                         </div>
                      </div>
                  </div>
                  <div class="tamozhyi-block">
                    <p>Таможня Ош</p>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <span>10 564 980</span>
                        </div>
                      </div>
                      <div class="progress">
                         <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                             <span>10 564 980</span>
                         </div>
                      </div>
                  </div>
                  <div class="tamozhnyi-bottom">
                    <p><span></span>Ввозные таможенные пошлины</p>
                    <p><span></span>Специальные, антидемпинговые и компенсационные пошлины</p>                    
                  </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>
@endsection
