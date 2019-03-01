/*
$(() => {
    let n = 0;
    var dohodValue = 0;
    var dohodAnim = new CountUp('dohod', 0, dohodValue, 0, 100);
    dohodAnim.update(dohodValue);

    var endValueRashod = 0;
    var rashodAnim = new CountUp('rashod', 0, endValueRashod, 0, 100);
    rashodAnim.update(endValueRashod);

    var gtsDohValueRashod = 0;
    var gtsDohValueRashodAnim = new CountUp('gts_doh', 0, gtsDohValueRashod, 0, 100);
    gtsDohValueRashodAnim.update(gtsDohValueRashod);

    var gtsRashodValueRashod = 0;
    var gtsRashodValueRashodAnim = new CountUp('gts_ras', 0, gtsRashodValueRashod, 0, 100);
    gtsRashodValueRashodAnim.update(gtsRashodValueRashod);

    var dohodNeNal = 0;
    var dohodNeNalAnim = new CountUp('dohodNeNal', 0, dohodNeNal, 0, 100);
    dohodNeNalAnim.update(dohodNeNal);

    const init = () => {
        $.ajax({
            url: "/gns",
            method: "get",
            success: data => {
                if (typeof data === 'object') {
                    const { dohod, rashod } = data;
                    dohodAnim.update(dohod);
                    rashodAnim.update(rashod);
                }
            }
        });

        $.ajax({
            url: "/gts",
            method: "get",
            success: data => {
                if (typeof data === 'object') {
                    const { dohod, rashod } = data;
                    gtsDohValueRashodAnim.update(dohod);
                    gtsRashodValueRashodAnim.update(rashod);
                }
            }
        });

        $.ajax({
            url: "/minfin-dohod-ne-nal",
            method: "get",
            success: data => {
                if (typeof data === 'object') {
                    const { dohod } = data;
                    dohodNeNalAnim.update(dohod);
                }
            }
        });
    };

    setInterval(init, 1000 * 60 * 5);

    init();
});
*/