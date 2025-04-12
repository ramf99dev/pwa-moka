<a href=""
    class=" flex justify-start items-center h-12 gap-x-4 bg-pink-100 rounded-xl text-xl font-bold w-4/5 mt-8 hover:text-pink-600 hover:fill-pink-600 pl-8">
    @if ($titulo === 'Productos')
        <svg class="h-8" viewBox="0 0 511.999 511.999">
            <g>
                <g>
                    <path d="M498.931,100.434L268.48,29.704c-3.129-0.96-6.466-0.989-9.61-0.084l-90.293,25.997l249.375,81.225v50.673
                c0,4.551-3.07,8.531-7.472,9.686l-92.536,24.275c-3.003,0.788-6.2,0.138-8.658-1.758c-2.458-1.896-3.897-4.824-3.897-7.928
                v-46.078h-0.102L61.73,86.381L14.864,99.874c-2.915,0.347-5.732,1.428-8.142,3.24c-3.889,2.926-6.281,7.379-6.648,12.19
                c-0.02,0.22-0.027,0.444-0.039,0.666C0.028,116.176,0,116.379,0,116.586v285.001c0,7.51,4.968,14.113,12.183,16.196
                l220.831,63.722c3.505,1.601,7.4,1.959,11.122,1.021l255.128-64.337c7.488-1.888,12.735-8.623,12.735-16.344V116.843
                C512,109.14,506.746,102.236,498.931,100.434z M206.08,278.91c0,7.719-7.418,13.273-14.825,11.098l-38.117-11.189
                c-4.925-1.446-8.309-5.965-8.309-11.098v-37.142c0-7.719,7.418-13.273,14.825-11.098l38.117,11.189
                c4.925,1.446,8.309,5.965,8.309,11.098V278.91z M479.988,379.182c0,5.756-3.914,10.775-9.497,12.177l-52.541,14.42
                c-3.752,0.943-7.729,0.102-10.78-2.277c-3.051-2.379-4.834-6.032-4.834-9.902v-52.728c0-5.756,3.914-10.775,9.497-12.177
                l52.541-14.42c3.752-0.943,7.729-0.102,10.78,2.277s4.834,6.032,4.834,9.902V379.182z" />
                </g>
            </g>
        </svg>
    @elseif($titulo === 'Usuarios')
        <svg class="h-8" viewBox="0 0 24 24">
            <path d="M7.5,5C5.6,5,4,6.6,4,8.5S5.6,12,7.5,12S11,10.4,11,8.5S9.4,5,7.5,5z M16.5,5C14.6,5,13,6.6,13,8.5s1.6,3.5,3.5,3.5
        S20,10.4,20,8.5S18.4,5,16.5,5z M7.5,14C2.6,14,1,18,1,18v2h13v-2C14,18,12.4,14,7.5,14z M16.5,14c-1.5,0-2.7,0.4-3.6,0.9
        c1.4,1.2,2,2.6,2.1,2.7l0.1,0.2V20h8v-2C23,18,21.4,14,16.5,14z" />
        </svg>
    @elseif($titulo === 'Reservas')
        <svg class="h-8" viewBox="0 0 24 24"">
            <path
                d="M21,6a1.009,1.009,0,0,0-.294-.708l-4-4a1,1,0,0,0-.323-.216A.988.988,0,0,0,16,1H4A1,1,0,0,0,3,2V22a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1ZM19,21H5V3H15V6a1,1,0,0,0,1,1h3ZM16,9a1,1,0,0,1,0,2H8A1,1,0,0,1,8,9ZM7,6A1,1,0,0,1,8,5h4a1,1,0,0,1,0,2H8A1,1,0,0,1,7,6Zm10,8a1,1,0,0,1-1,1H8a1,1,0,0,1,0-2h8A1,1,0,0,1,17,14Zm0,4a1,1,0,0,1-1,1H8a1,1,0,0,1,0-2h8A1,1,0,0,1,17,18Z" />
        </svg>
    @elseif($titulo === 'Órdenes')
        <svg class="h-8" viewBox="0 0 512 512">
            <g>
                <g>
                    <g>
                        <path d="M479.66,343.662c-0.752-59.141-24.357-114.625-66.445-156.223c-37.124-36.675-84.874-58.837-136.229-63.591
                    c1.261-2.843,1.969-5.987,1.969-9.299c0-12.678-10.277-22.954-22.954-22.954c-12.678,0-22.954,10.277-22.954,22.954
                    c0,3.311,0.706,6.455,1.969,9.299c-51.355,4.755-99.104,26.917-136.229,63.591c-42.089,41.597-65.693,97.081-66.445,156.223
                    l-0.199,15.872h447.718L479.66,343.662z M108.711,305.721l-30.365-7.816c0.763-2.957,19.362-72.641,83.111-100.394l12.518,28.745
                    C124.092,247.969,108.857,305.146,108.711,305.721z" />
                        <rect x="0" y="389.058" width="512" height="31.347" />
                    </g>
                </g>
            </g>
        </svg>
    @elseif($titulo === 'Estadísticas')
        <svg class="h-8" viewBox="0 0 1024 1024">
            <path
                d="M521.58 516.763v-472.816c250.725 22.642 450.175 222.092 472.817 472.817h-472.816zM918.229 593.091h-435.436c-21.963 0-39.769-17.805-39.769-39.769 0 0 0 0 0 0v-435.463c-222.914 20.121-397.682 207.273-397.682 435.436 0 241.605 195.898 437.452 437.451 437.451 228.163 0 415.339-174.715 435.436-397.657z" />
        </svg>
    @endif
    {{ $titulo }}
</a>
