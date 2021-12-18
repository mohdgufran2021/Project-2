<div class="container">
    <div class="container col-5">

        <button class="btn btn-primary" id="btnStart">Start Timer</button>
        <button class="btn btn-primary" id="btnStop">Stop Timer</button>
        <span id="fetch"></span>
    </div>
</div>


<script>

    let timerId;
    let btnStart, btnStop,responseContainer;
    btnStart = document.getElementById('btnStart');
    btnStop = document.getElementById('btnStop');
    responseContainer = document.getElementById('fetch');

    btnStart.addEventListener('click', startClock);
    btnStop.addEventListener('click', cancelClock);
    btnStop.disabled=true;

    function getdata() {

        fetch('http://example.com/TestFetch/get')
            .then((response) => {
                return response.json();
            })
            .then((response) => {
                responseContainer.innerHTML = response.data;
            });
    }

    //setInterval(getdata,1000);

    function startClock() {
        responseContainer.innerHTML = 'plaese wait';
        btnStart.disabled=true;
        btnStop.disabled=false;
        timerId = setInterval(getdata, 1000);
    }


    function cancelClock()
    {
        responseContainer.innerHTML = '';
        btnStart.disabled=false;
        btnStop.disabled=true;
        clearInterval(timerId);
    }


    /*
            function getdata()
            {
                fetch('http://Example.com/TestFetch/get')
                .then( (response) => {
                    return response.json();
                })
                .then( (response) =>
                {
                    document.getElementById('fetch').innerHTML = response;
                });
            }
    */


</script>
