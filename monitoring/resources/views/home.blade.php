@extends('layouts.app')
@section('MainTitleKG', 'Кыргыз Республикасынын финансы министрлиги')
@section('MainTitleRU', 'Министерство финансов Кыргызской Республики')
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
                  <div id="minfin-ostatok"></div>
                     <script type="text/javascript">
                         // Themes begin
                           am4core.useTheme(am4themes_dark);
                           am4core.useTheme(am4themes_animated);
                           // Themes end

                           var OstatokChart = am4core.create("minfin-ostatok", am4charts.XYChart);
                           OstatokChart.hiddenState.properties.opacity = 0;
                           OstatokChart.padding(0, 0, 0, 0);
                           OstatokChart.zoomOutButton.disabled = true;

                           var data = [];
                           var ostatoks = 10;
                           var i = 0;

                           for (i = 0; i <= 1000; i++) {
                              ostatoks -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
                              data.push({ date: new Date().setSeconds(i - 1000), value: ostatoks });
                           }

                           OstatokChart.data = data;

                        var OstatokDateAxis = OstatokChart.xAxes.push(new am4charts.DateAxis());
                            OstatokDateAxis.renderer.grid.template.location = 0;
                            OstatokDateAxis.renderer.minGridDistance = 100;
                            OstatokDateAxis.periodChangeDateFormats.setKey("minute", "[bold]h:mm a");
                            OstatokDateAxis.periodChangeDateFormats.setKey("hour", "[bold]h:mm a");
                            OstatokDateAxis.renderer.inside = true;
                            OstatokDateAxis.renderer.labels.template.fontSize = 11;
                            OstatokDateAxis.renderer.axisFills.template.disabled = true;
                            OstatokDateAxis.renderer.ticks.template.disabled = true;
                        var OstatokValueAxis = OstatokChart.yAxes.push(new am4charts.ValueAxis());
                            OstatokValueAxis.interpolationDuration = 1000;
                            OstatokValueAxis.rangeChangeDuration = 1000;
                            OstatokValueAxis.renderer.labels.template.fontSize = 9;
                            OstatokValueAxis.renderer.minLabelPosition = 0.05;
                            OstatokValueAxis.renderer.maxLabelPosition = 0.95;
                            OstatokValueAxis.tooltip.disabled = true;
                            OstatokValueAxis.renderer.inside = true;
                            OstatokValueAxis.renderer.axisFills.template.disabled = true;
                            OstatokValueAxis.renderer.ticks.template.disabled = true;

                        var OstatokSeries = OstatokChart.series.push(new am4charts.LineSeries());
                            OstatokSeries.dataFields.dateX = "date";
                            OstatokSeries.dataFields.valueY = "value";
                            OstatokSeries.interpolationDuration = 1000;
                            OstatokSeries.stroke = am4core.color("#ffda67");
                            OstatokSeries.defaultState.transitionDuration = 0;
                            OstatokSeries.tensionX = 1;

                            OstatokChart.events.on("datavalidated", function () {
                            OstatokDateAxis.zoom({ start: 1 / 15, end: 1.1 }, false, true);
                           });

                            OstatokDateAxis.interpolationDuration = 1000;
                            OstatokDateAxis.rangeChangeDuration = 1000;

                           document.addEventListener("visibilitychange", function() {
                              if (document.hidden) {
                                 if (interval) {
                                    clearInterval(interval);
                                 }
                              }
                              else {
                                 startInterval();
                              }
                           }, false);

                           // add data
                        var interval;
                           function startInterval() {
                              interval = setInterval(function() {
                                 ostatoks =
                                         ostatoks + Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 5);
                                 var OstatokLastdataItem = OstatokSeries.dataItems.getIndex(OstatokSeries.dataItems.length - 1);
                                 OstatokChart.addData(
                                         { date: new Date(OstatokLastdataItem.dateX.getTime() + 1000), value: ostatoks },
                                         1
                                 );
                              }, 1000);
                           }

                           startInterval();

                           // all the below is optional, makes some fancy effects
                           // gradient fill of the series
                         OstatokSeries.fillOpacity = 1;
                     var OstatokGradient = new am4core.LinearGradient();
                         OstatokGradient.addColor(OstatokChart.colors.getIndex(0), 0.1);
                         OstatokGradient.addColor(OstatokChart.colors.getIndex(0), 0);
                         OstatokSeries.fill = OstatokGradient;

                           // this makes date axis labels to fade out
                         OstatokDateAxis.renderer.labels.template.adapter.add("fillOpacity", function (fillOpacity, target) {
                              var dataItem = target.dataItem;
                              return dataItem.position;
                           })

                           // need to set this, otherwise fillOpacity is not changed and not set
                         OstatokDateAxis.events.on("validated", function () {
                              am4core.iter.each(OstatokDateAxis.renderer.labels.iterator(), function (label) {
                                 label.fillOpacity = label.fillOpacity;
                              })
                           })

                           // this makes date axis labels which are at equal minutes to be rotated
                         OstatokDateAxis.renderer.labels.template.adapter.add("rotation", function (rotation, target) {
                              var dataItem = target.dataItem;
                              if (dataItem.date && dataItem.date.getTime() == am4core.time.round(new Date(dataItem.date.getTime()), "minute").getTime()) {
                                 target.verticalCenter = "middle";
                                 target.horizontalCenter = "left";
                                 return -90;
                              }
                              else {
                                 target.verticalCenter = "bottom";
                                 target.horizontalCenter = "middle";
                                 return 0;
                              }
                           })

                           // bullet at the front of the line
                     var OstatokBullet = OstatokSeries.createChild(am4charts.CircleBullet);
                         OstatokBullet.circle.radius = 4;
                         OstatokBullet.fillOpacity = 1;
                         OstatokBullet.fill = am4core.color("#ffda67");
                         OstatokBullet.isMeasured = false;

                         OstatokSeries.events.on("validated", function() {
                            OstatokBullet.moveTo(OstatokSeries.dataItems.last.point);
                            OstatokBullet.validatePosition();
                           });
                     </script>
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
                  <div class="dohros-header"><p>План /<span>Факт</span></p><span>ГНС</span></div>
                  <span class="boh-bottom">Текущий месяц</span>
                  <p class="dohros doh"><span id="GNScurrentPlan">0</span></p>
                  <p class="dohros ros"><span id="GNScurrentFact">0</span></p>
                  <span class="boh-bottom">Прошлый месяц</span>
                  <p class="dohros doh"><span id="GNSoldPlan">0</span></p>
                  <p class="dohros ros"><span id="GNSOldFact">0</span></p>
               </div>
               <div class="col-4">
                  <div class="dohros-header"><p>План /<span>Факт</span></p><span>ГТС</span></div>
                  <span class="boh-bottom">Текущий месяц</span>
                  <p class="dohros doh"><span id="GTScurrentPlan">0</span></p>
                  <p class="dohros ros"><span id="GTScurrentFact">0</span></p>
                  <span class="boh-bottom">Прошлый месяц</span>
                  <p class="dohros doh"><span id="GTSoldPlan">0</span></p>
                  <p class="dohros ros"><span id="GTSOldFact">0</span></p>
               </div>
               <div class="col-4">
                  <div class="dohros-header"><p>План /<span>Факт</span></p><span>Неналоговые</span></div>
                  <span class="boh-bottom">Текущий месяц</span>
                  <p class="dohros doh"><span id="NotTaxCurrentPlan">0</span></p>
                  <p class="dohros ros"><span id="NotTaxcurrentFact">0</span></p>
                  <span class="boh-bottom">Прошлый месяц</span>
                  <p class="dohros doh"><span id="NotTaxoldPlan">0</span></p>
                  <p class="dohros ros"><span id="NotTaxOldFact">0</span></p>
               </div>
            </div>
            <div class="mingin-top-3 row">
               <div class="col-6 payers">
                  <div class="montoring-container">
                     <div class="monitoring-header">Топ 3 плательщиков</div>
                     <div class="monitoring-content konkrus">
                        <div id="topPayersCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
                           <ol class="carousel-indicators">
                              <li data-target="#topPayersCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#topPayersCarousel" data-slide-to="1"></li>                              
                              <li data-target="#topPayersCarousel" data-slide-to="2"></li>                                                            
                           </ol>
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <div class="carousel-caption">
                                    <div class="dgzKonkurs">
                                       <span>01.12.2018</span>
                                       <span>Общество с ограниченной</span>
                                       <span>ответственностью "Comtec soft"</span>
                                    </div>
                                    <div class="dgzKonkursSums">
                                          <p>сумма</p>
                                          <p>1 125 568 952<span>сом</span></p>
                                    </div> 
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <div class="carousel-caption">
                                    <div class="dgzKonkurs">
                                       <span>01.12.2018</span>
                                       <span>Общество с ограниченной</span>
                                       <span>ответственностью "Comtec soft"</span>
                                    </div>
                                    <div class="dgzKonkursSums">
                                          <p>сумма</p>
                                          <p>1 125 568 952<span>сом</span></p>
                                    </div> 
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <div class="carousel-caption">
                                    <div class="dgzKonkurs">
                                       <span>01.12.2018</span>
                                       <span>Общество с ограниченной</span>
                                       <span>ответственностью "Comtec soft"</span>
                                    </div>
                                    <div class="dgzKonkursSums">
                                          <p>сумма</p>
                                          <p>1 125 568 952<span>сом</span></p>
                                    </div> 
                                 </div>
                              </div> 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-6 reciepts">
                  <div class="montoring-container">
                     <div class="monitoring-header">Топ 3 получателей</div>
                     <div class="monitoring-content konkrus">
                        <div id="topRecieptsCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
                           <ol class="carousel-indicators">
                              <li data-target="#topRecieptsCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#topRecieptsCarousel" data-slide-to="1"></li>                              
                              <li data-target="#topRecieptsCarousel" data-slide-to="2"></li>                                                            
                           </ol>
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <div class="carousel-caption">
                                    <div class="dgzKonkurs">
                                       <span>01.12.2018</span>
                                       <span>Общество с ограниченной</span>
                                       <span>ответственностью "Comtec soft"</span>
                                    </div>
                                    <div class="dgzKonkursSums">
                                          <p>сумма</p>
                                          <p>1 125 568 952<span>сом</span></p>
                                    </div> 
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <div class="carousel-caption">
                                    <div class="dgzKonkurs">
                                       <span>01.12.2018</span>
                                       <span>Общество с ограниченной</span>
                                       <span>ответственностью "Comtec soft"</span>
                                    </div>
                                    <div class="dgzKonkursSums">
                                          <p>сумма</p>
                                          <p>1 125 568 952<span>сом</span></p>
                                    </div> 
                                 </div>
                              </div>
                              <div class="carousel-item">
                                 <div class="carousel-caption">
                                    <div class="dgzKonkurs">
                                       <span>01.12.2018</span>
                                       <span>Общество с ограниченной</span>
                                       <span>ответственностью "Comtec soft"</span>
                                    </div>
                                    <div class="dgzKonkursSums">
                                          <p>сумма</p>
                                          <p>1 125 568 952<span>сом</span></p>
                                    </div> 
                                 </div>
                              </div> 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-6">
            <div class="row">
               <div class="col-6">
                  <div class="gosdolg">
                     <div class="mingin-top-header">Государственный долг<span>тыс. сом</span></div>
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
                        <div id="minfin-profit-deficit"></div>
                        <script type="text/javascript">

                           // Themes begin
                           am4core.useTheme(am4themes_dark);
                           am4core.useTheme(am4themes_animated);
                           // Themes end

                           // Create chart instance
                           var ProfDefChart = am4core.create("minfin-profit-deficit", am4charts.XYChart);
                           ProfDefChart.hiddenState.properties.opacity = 0;
                           ProfDefChart.padding(0, 0, 0, 0);
                           ProfDefChart.zoomOutButton.disabled = true;

                           // Add data
                           ProfDefChart.data = generatechartData();
                           function generatechartData() {
                              var chartData = [];
                              var firstDate = new Date();
                              firstDate.setDate( firstDate.getDate() - 150 );
                              var profdefValue = -40;
                              var b = 0.6;
                              for ( var i = 0; i < 150; i++ ) {
                                 // we create date objects here. In your data, you can have date strings
                                 // and then set format of your dates using chart.dataDateFormat property,
                                 // however when possible, use date objects, as this will speed up chart rendering.
                                 var newDate = new Date( firstDate );
                                 newDate.setDate( newDate.getDate() + i );
                                 if(i > 80){
                                    b = 0.4;
                                 }
                                 profdefValue += Math.round((Math.random()<b?1:-1)*Math.random()*10);

                                 chartData.push( {
                                    date: newDate,
                                    profdefValue: profdefValue
                                 } );
                              }
                              return chartData;
                           }

                           // Create axes
                           var ProfDefDateAxis = ProfDefChart.xAxes.push(new am4charts.DateAxis());
                           ProfDefDateAxis.renderer.inside = true;
                           ProfDefDateAxis.renderer.labels.template.fontSize = 11;
                           ProfDefDateAxis.renderer.axisFills.template.disabled = true;
                           ProfDefDateAxis.renderer.ticks.template.disabled = true;
                           // Create value axis
                           var ProfDefValueAxis = ProfDefChart.yAxes.push(new am4charts.ValueAxis());
                           ProfDefValueAxis.tooltip.disabled = true;
                           ProfDefValueAxis.renderer.labels.template.fontSize = 11;
                           ProfDefValueAxis.renderer.inside = true;
                           ProfDefValueAxis.renderer.axisFills.template.disabled = true;
                           ProfDefValueAxis.renderer.ticks.template.disabled = true;
                           // Create series
                           var ProfDefSeries = ProfDefChart.series.push(new am4charts.LineSeries());
                           ProfDefSeries.dataFields.valueY = "profdefValue";
                           ProfDefSeries.strokeWidth = 2;
                           ProfDefSeries.dataFields.dateX = "date";
                           ProfDefSeries.fillOpacity = 0.1;

                           // Create a range to change stroke for values below 0
                           var ProfDefrange = ProfDefValueAxis.createSeriesRange(ProfDefSeries);
                           ProfDefrange.value = 0;
                           ProfDefrange.endValue = -1000;
                           ProfDefrange.contents.stroke = am4core.color("#ffda67");
                           ProfDefrange.contents.fill = ProfDefrange.contents.stroke;
                           ProfDefrange.contents.strokeOpacity = 0.8;
                           ProfDefrange.contents.fillOpacity = 0.1;

                        </script>
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
                     <div class="tamozhnyi-header">Евразийский экономический союз<span>10.10.2019</span></div>
                     <div class="tamozhnyi-header-bottom">Общий</div>
                     <div class="tamozhnyi-total">
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <span>10 564 980</span>
                           </div>
                        </div>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <span>10 564 980</span>
                           </div>
                        </div>
                     </div>
                     <div class="tamozhnyi-countries">
                        <div class="tamozhnyi-countries-header">по странам</div>
                        <div class="tamozhyi-block">
                           <p>Кыргызстан</p>
                           <div class="progress-flag kg">
                              <ul>
                                 <li></li>
                                 <li></li>
                                 <li></li>
                              </ul>
                           </div>                                 
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
                        <hr>                                             
                        <div class="tamozhyi-block">
                           <p>россия</p>
                           <div class="progress-flag ru">
                              <ul>
                                 <li></li>
                                 <li></li>
                                 <li></li>                                                                        
                              </ul>
                           </div>
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
                        <hr>
                        <div class="tamozhyi-block">
                           <p>казахстан</p>
                           <div class="progress-flag kz">
                              <ul>
                                 <li></li>
                                 <li></li>
                                 <li></li>                                                                        
                              </ul>
                           </div>                              
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
                        <hr>
                        <div class="tamozhyi-block">
                           <p>беларусь</p>
                           <div class="progress-flag by">
                              <ul>
                                 <li></li>
                                 <li></li>
                              </ul>
                           </div>                                
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
                        <hr>                        
                        <div class="tamozhyi-block">
                           <p>армения</p>
                           <div class="progress-flag ar">
                              <ul>
                                 <li></li>
                                 <li></li>
                                 <li></li>                                                                        
                              </ul>
                           </div>                                  
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
                     </div>                     
                     <div class="tamozhnyi-bottom">
                        <p><span></span>Импорт</p>
                        <p><span></span>Экспорт</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
