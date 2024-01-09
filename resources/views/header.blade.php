<style>
    
    .hover-effect span {
        display: inline-block;
        transition: color 2.5s ease;
    }

    .hover-effect:hover span {
        animation: scaleAndJump 0.8s ease-in-out;
    }

    .hover-effect:hover {
        color: #ff5500;
    }

    .hover-effect:hover span:nth-child(1) {
        animation-delay: 0s;
    }

    .hover-effect:hover span:nth-child(2) {
        animation-delay: 0.1s;
    }

    .hover-effect:hover span:nth-child(3) {
        animation-delay: 0.2s;
    }

    .hover-effect:hover span:nth-child(4) {
        animation-delay: 0.3s;
    }

    @keyframes scaleAndJump {
        0%, 100% {
            transform: scale(1) translateY(0);
        }
        12.5% {
            transform: scale(1.25) translateY(-5px);
        }
        25% {
            transform: scale(1.5) translateY(-10px);
        }
        37.5% {
            transform: scale(1.75) translateY(-15px);
        }
        50% {
            transform: scale(2) translateY(-20px);
        }
        62.5% {
            transform: scale(1.75) translateY(-15px);
        }
        75% {
            transform: scale(1.5) translateY(-10px);
        }
        87.5% {
            transform: scale(1.25) translateY(-5px);
        }
    }
</style>

<div class="flex items-center">
<img src="{{ asset('images/headphone2.gif') }}" class="w-8 h-8 text-gray-500" alt="Brand Icon">
        <path
            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
    </svg>

    <div class="ml-4 text-lg leading-7 font-semibold">
        <a href="{{ route('brands.index') }}" class="ml-1 underline hover-effect">
        <span>所</span><span>有</span><span>廠</span><span>牌</span>
        </a>
    </div>
</div>

<div class="flex items-center">
<img src="{{ asset('images/headphone2.gif') }}" class="w-8 h-8 text-gray-500" alt="Brand Icon">
        <path
            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>

    <div class="ml-4 text-lg leading-7 font-semibold">
        <a href="{{ route('headphones.index') }}" class="ml-1 underline hover-effect">
        <span>所</span><span>有</span><span>耳</span><span>機</span>
        </a>
    </div>
</div>
