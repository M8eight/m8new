<style>
    #gradient {
        height: 10px;
        width: 100%;
        border: 1px solid white;
        font-size: 30px;
        background: linear-gradient(130deg, #ff7e00, #ffffff, #5cff00);
        background-size: 200% 200%;

        -webkit-animation: Animation 5s ease infinite;
        -moz-animation: Animation 5s ease infinite;
        animation: Animation 5s ease infinite;
    }

    @-webkit-keyframes Animation {
        0% {
            background-position: 10% 0%
        }

        50% {
            background-position: 91% 100%
        }

        100% {
            background-position: 10% 0%
        }
    }

    @-moz-keyframes Animation {
        0% {
            background-position: 10% 0%
        }

        50% {
            background-position: 91% 100%
        }

        100% {
            background-position: 10% 0%
        }
    }

    @keyframes Animation {
        0% {
            background-position: 10% 0%
        }

        50% {
            background-position: 91% 100%
        }

        100% {
            background-position: 10% 0%
        }
    }
</style>

<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-2 d-flex align-items-center">
            <span class="text-muted logo">Endwhile</span>
        </div>
        <div class="col-md-8">
            <div id="gradient"></div>
        </div>
        <ul class="nav col-md-2 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="https://vk.com/endwhile">Vk</a></li>
            <li class="ms-3"><a class="text-muted" href="https://t.me/Endwhile">Telegram</a></li>
        </ul>
    </footer>
</div>
