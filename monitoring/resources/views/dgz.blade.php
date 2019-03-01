@extends('layouts.app')
@section('MainTitleKG', 'Кыргыз Республикасынын Мамлекеттик сатып алууларынын расмий Порталы')
@section('MainTitleRU', 'Официальный Портал государственных закупок Кыргызской Республики')
@section('content')
<div class="content">
    <div class="row">
       <div class="col-6">
          <div class="minfin-ostatok">
             <div class="minfin-ost-header">
                <div class="row no-gutters justify-content-between">
                   <div class="col-9 ost-title">Объявленные и завершенные конкурсы </div>
                   <div class="col-3 ost-date">
                      <p><span>13:05</span>10.10.2019</p>
                   </div>
                </div>
             </div>
             <div class="minginostchart">
                  <div id="dgzFinished"></div>
                  <script type="text/javascript">
                     // Themes begin
                     am4core.useTheme(am4themes_dark);
                     am4core.useTheme(am4themes_animated);
                     // Themes end

                     // Create chart instance
                     var DgzChart = am4core.create("dgzFinished", am4charts.XYChart);
                         DgzChart.hiddenState.properties.opacity = 0;
                         DgzChart.padding(0, 0, 0, 0);
                         DgzChart.zoomOutButton.disabled = true;
                     // Add data
                     DgzChart.data = [{
                     "year": "01:00",
                     "germany": 5,
                     "uk": 3
                     }, {
                     "year": "03:00",
                     "germany": 2,
                     "uk": 6
                     }, {
                     "year": "04:00",
                     "germany": 3,
                     "uk": 1
                     }, {
                     "year": "05:00",
                     "germany": 4,
                     "uk": 1
                     }, {
                     "year": "06:00",
                     "germany": 1,
                     "uk": 2
                     }, {
                     "year": "07:00",
                     "germany": 2,
                     "uk": 1
                     }, {
                     "year": "08:00",
                     "germany": 2,
                     "uk": 3
                     }, {
                     "year": "09:00",
                     "germany": 1,
                     "uk": 5
                     }, {
                     "year": "10:00",
                     "germany": 5,
                     "uk": 2
                     }, {
                     "year": "11:00",
                     "germany": 3,
                     "uk": 6
                     }, {
                     "year": "12:00",
                     "germany": 2,
                     "uk": 4
                     }];
                                          
                     // Create category axis
                     var DgzCategoryAxis = DgzChart.xAxes.push(new am4charts.CategoryAxis());
                     DgzCategoryAxis.dataFields.category = "year";
                     //
                     DgzCategoryAxis.renderer.grid.template.location = 0;
                     DgzCategoryAxis.renderer.minGridDistance = 100;
                     DgzCategoryAxis.renderer.inside = true;
                     DgzCategoryAxis.renderer.labels.template.fontSize = 11;
                     DgzCategoryAxis.renderer.axisFills.template.disabled = true;
                     DgzCategoryAxis.renderer.ticks.template.disabled = true;
                     //

                     // Create value axis
                     var DgzValueAxis = DgzChart.yAxes.push(new am4charts.ValueAxis());
                     //
                     DgzValueAxis.interpolationDuration = 1000;
                     DgzValueAxis.rangeChangeDuration = 1000;
                     DgzValueAxis.renderer.labels.template.fontSize = 9;
                     DgzValueAxis.renderer.minLabelPosition = 0.05;
                     DgzValueAxis.renderer.maxLabelPosition = 0.95;
                     DgzValueAxis.tooltip.disabled = true;
                     DgzValueAxis.renderer.inside = true;
                     DgzValueAxis.renderer.axisFills.template.disabled = true;
                     DgzValueAxis.renderer.ticks.template.disabled = true;                     
                     //

                     var DgzCount = DgzChart.series.push(new am4charts.LineSeries());
                     DgzCount.dataFields.valueY = "germany";
                     DgzCount.dataFields.categoryX = "year";
                     DgzCount.name = 'Germany';
                     DgzCount.stroke = am4core.color("#ffda67");
                     DgzCount.strokeWidth = 2;
                     DgzCount.tensionX = 0.8;

                     var DgzSums = DgzChart.series.push(new am4charts.LineSeries());
                     DgzSums.dataFields.valueY = "uk";
                     DgzSums.stroke = am4core.color("#00fdfd");
                     DgzSums.dataFields.categoryX = "year";
                     DgzSums.name = 'United Kingdom';
                     DgzSums.strokeWidth = 2;
                     DgzSums.tensionX = 0.8;
                  </script>
             </div>
             <div class="row no-gutters minfinost-bottom">
                <div class="col-3">
                   <p><span>объявленные конкурсы:</span>900 685 100 000</p>
                </div>
                <div class="col-3">
                   <p><span>на сумму:</span>900 685 100 000</p>
                </div>
                <div class="col-3">
                   <p><span>завершенные конкурсы:</span>900 685 100 000</p>
                </div>
                <div class="col-3">
                    <p><span>на сумму:</span>900 685 100 000</p>
                 </div>                
             </div>
          </div>
          <div class="row">
             <div class="col-6">
               <div class="montoring-container">
                  <div class="monitoring-header">Топ крупных конкурсов</div>
                  <div class="monitoring-content konkrus">
                     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="8000">
                           <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>                              
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>                                                            
                              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>                              
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
               <div class="montoring-container">
                  <div class="monitoring-header">Количество участников портала</div>
                  <div class="monitoring-content participant">
                     <div class="participant-child">
                        <p><i class="fas fa-university"></i><span>закупщики</span></p>
                        <p>68 956</p>
                     </div>
                     <div class="participant-child">
                        <p><i class="fas fa-industry"></i><span>поставщики</span></p>
                        <p>68 956</p>
                     </div>
                     <div class="participant-child">
                        <p><i class="fas fa-ban"></i><span>черный список</span></p>
                        <p>68 956</p>
                     </div>
                  </div>
               </div>             
             </div>
             <div class="col-6">
               <div class="ras-by-functions dgz">
                     <div class="rasbyfunc-header">Популярные позиции</div>
                     <div class="ras-by-func-content">
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="ras-prog-content">
                                 <p><span>1234</span>Государственные службы общего назначения</p><span>10 564 980</span>
                              </div>
                           </div>
                        </div>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 77%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="ras-prog-content">
                                 <p><span>1234</span>Оборона</p><span>10 564 980</span>
                              </div>
                           </div>
                        </div>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="ras-prog-content">
                                 <p><span>1234</span>Общественный порядок и безопасность</p><span>10 564 980</span>
                              </div>
                           </div>
                        </div>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 71%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="ras-prog-content">
                                 <p><span>1234</span>Экономические вопросы</p><span>10 564 980</span>
                              </div>
                           </div>
                        </div>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 68%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="ras-prog-content">
                                 <p><span>701</span>Охрана окружающей среды</p><span>10 564 980</span>
                              </div>
                           </div>
                        </div>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 64%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="ras-prog-content">
                                 <p><span>701</span>Жилищные и коммунальные услуги</p><span>10 564 980</span>
                              </div>
                           </div>
                        </div>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 61%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="ras-prog-content">
                                 <p><span>701</span>Здравоохранение</p><span>10 564 980</span>
                              </div>
                           </div>
                        </div>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="ras-prog-content">
                                 <p><span>701</span>Отдых, культура и религия</p><span>10 564 980</span>
                              </div>
                           </div>
                        </div>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 54%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="ras-prog-content">
                                 <p><span>701</span>Образование</p><span>10 564 980</span>
                              </div>
                           </div>
                        </div>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 51%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                              <div class="ras-prog-content">
                                 <p><span>701</span>Социальная защита</p><span>10 564 980</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
             </div>             
          </div>
       </div>
       <div class="col-6">
            <div class="minfin-ostatok">
               <div class="minfin-ost-header">
                  <div class="row no-gutters justify-content-between">
                     <div class="col-12 ost-title">Сумма заключенных договоров 2019 год</div>
                  </div>
               </div>
               <div class="dogovorCount">
                  <div class="DogovorCounter">110 201 356 987</div>
               </div>
               <div class="dogovorCountTable">
                  <table>
                     <thead>
                        <th>дата</th>
                        <th>закупка</th>
                        <th>победитель</th>
                        <th>сумма</th>
                     </thead>
                     <tbody>
                        <tr>
                           <td>2019-01-24</td>
                           <td>Приобретение продуктов питания для начальной школы на 1 квартал 2019г</td>
                           <td>Общество с ограниченной ответственностью "Comtec soft"</td>
                           <td>150 100</td>
                        </tr>
                        <tr>
                           <td>2019-01-24</td>
                           <td>Приобретение продуктов питания для начальной школы на 1 квартал 2019г</td>
                           <td>Общество с ограниченной ответственностью "Comtec soft"</td>
                           <td>685 100</td>
                        </tr>
                        <tr>
                           <td>2019-01-24</td>
                           <td>Приобретение продуктов питания для начальной школы на 1 квартал 2019г</td>
                           <td>Общество с ограниченной ответственностью "Comtec soft"</td>
                           <td>50 685 100</td>
                        </tr>
                        <tr>
                           <td>2019-01-24</td>
                           <td>Приобретение продуктов питания для начальной школы на 1 квартал 2019г</td>
                           <td>Общество с ограниченной ответственностью "Comtec soft"</td>
                           <td>4 685 100</td>
                        </tr>
                        <tr>
                           <td>2019-01-24</td>
                           <td>Приобретение продуктов питания для начальной школы на 1 квартал 2019г</td>
                           <td>Общество с ограниченной ответственностью "Comtec soft"</td>
                           <td>1 505 100</td>
                        </tr>
                        <tr>
                           <td>2019-01-24</td>
                           <td>Приобретение продуктов питания для начальной школы на 1 квартал 2019г</td>
                           <td>Общество с ограниченной ответственностью "Comtec soft"</td>
                           <td>1 685 100</td>
                        </tr>
                        <tr>
                           <td>2019-01-24</td>
                           <td>Приобретение продуктов питания для начальной школы на 1 квартал 2019г</td>
                           <td>Общество с ограниченной ответственностью "Comtec soft"</td>
                           <td>150 685 100</td>
                        </tr>
                        <tr>
                           <td>2019-01-24</td>
                           <td>Приобретение продуктов питания для начальной школы на 1 квартал 2019г</td>
                           <td>Общество с ограниченной ответственностью "Comtec soft"</td>
                           <td>150 685 100</td>
                        </tr>
                        <tr>
                           <td>2019-01-24</td>
                           <td>Приобретение продуктов питания для начальной школы на 1 квартал 2019г</td>
                           <td>Общество с ограниченной ответственностью "Comtec soft"</td>
                           <td>150 685 100</td>
                        </tr>
                        <tr>
                           <td>2019-01-24</td>
                           <td>Приобретение продуктов питания для начальной школы на 1 квартал 2019г</td>
                           <td>Общество с ограниченной ответственностью "Comtec soft"</td>
                           <td>150 685 100</td>
                        </tr>                        
                     </tbody>
                  </table>
                  </table>
               </div>
            </div>
       </div>
    </div>
 </div>
@endsection