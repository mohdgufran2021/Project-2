<div class="container">
    <div class="container col-5">

        <button class="btn btn-primary" id="btnStart">Start Timer</button>
        <button class="btn btn-primary" id="btnStop">Stop Timer</button>
        <span id="fetch"></span>
    </div>
</div>


<script>

    let btnStart,btnStop,responseContainer,timerId;
    btnStart = document.getElementById('btnStart');
    btnStop = document.getElementById('btnStop');
    responseContainer = document.getElementById('fetch');

    btnStart.addEventListener('click',startClock);
    btnStop.addEventListener('click',stopClock);


    function getdat()
    {
        fetch('http://Example.com/TestFetch/get')
            .then( (response) => { return response.json(); })
            .then( (response) => { responseContainer.innerHTML = response.data });
    }

    function startClock()
    {
        btnStart.disabled = true;
        btnStop.disabled = false;
        responseContainer.innerHTML = 'Please Wait...';
        timerId = setInterval(getdat,1000);
    }

    function stopClock() {
        responseContainer.innerHTML = '';
        btnStart.disabled = false;
        btnStop.disabled = true;
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
