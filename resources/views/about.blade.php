@extends('layouts.app')

@section('container')
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">

            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        Today's Money</p>
                                    <h5 class="mb-2 font-bold dark:text-white">$53,000</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                                        since yesterday
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card2 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        Today's Users</p>
                                    <h5 class="mb-2 font-bold dark:text-white">2,300</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="text-sm font-bold leading-normal text-emerald-500">+3%</span>
                                        since last week
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                    <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="dark:text-white">Projects table</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table
                                    class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Project</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Budget</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Status</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Completion</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="border-t">
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-spotify.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="spotify" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Spotify</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $2,500</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">60%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center w-3/5 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-blue-700 to-cyan-500 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-invision.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="invision" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Invision
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $5,000</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">done</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">100%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center w-full h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-emerald-500 to-teal-400 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-jira.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="jira" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Jira</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $3,400</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">canceled</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">30%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-red-600 to-orange-600 w-3/10 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                                                aria-valuemax="30"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-slack.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="slack" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Slack</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $1,000</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">canceled</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">0%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center w-0 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-emerald-500 to-teal-400 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="0"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-webdev.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="webdev" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Webdev</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $14,000</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">80%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center w-4/5 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-blue-700 to-cyan-500 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                                aria-valuemax="80"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-xd.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="xd" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Adobe XD
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $2,300</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">done</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">100%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center w-full h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-green-600 to-lime-400 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6 class="dark:text-white">Projects table</h6>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table
                                    class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Project</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Budget</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Status</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Completion</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="border-t">
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-spotify.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="spotify" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Spotify
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $2,500</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">60%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center w-3/5 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-blue-700 to-cyan-500 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-invision.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="invision" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Invision
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $5,000</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">done</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">100%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center w-full h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-emerald-500 to-teal-400 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-jira.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="jira" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Jira</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $3,400</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">canceled</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">30%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-red-600 to-orange-600 w-3/10 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                                                aria-valuemax="30"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-slack.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="slack" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Slack</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $1,000</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">canceled</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">0%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center w-0 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-emerald-500 to-teal-400 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="0"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-webdev.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="webdev" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Webdev</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $14,000</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">80%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center w-4/5 h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-blue-700 to-cyan-500 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                                aria-valuemax="80"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-xd.svg"
                                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                            alt="xd" />
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Adobe XD
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    $2,300</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">done</span>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                <div class="flex items-center justify-center">
                                                    <span
                                                        class="mr-2 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">100%</span>
                                                    <div>
                                                        <div
                                                            class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                            <div class="flex flex-col justify-center w-full h-auto overflow-hidden text-center text-white transition-all bg-blue-500 rounded duration-600 ease bg-gradient-to-tl from-green-600 to-lime-400 whitespace-nowrap"
                                                                role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                <button
                                                    class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i
                                                        class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card3 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        New Clients</p>
                                    <h5 class="mb-2 font-bold dark:text-white">+3,462</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="text-sm font-bold leading-normal text-red-600">-2%</span>
                                        since last quarter
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                    <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card4 -->
            <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p
                                        class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                        Sales</p>
                                    <h5 class="mb-2 font-bold dark:text-white">$103,430</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="text-sm font-bold leading-normal text-emerald-500">+5%</span>
                                        than last month
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                    <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards row 2 -->
        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
                <div
                    class="border-black/12.5 dark:bg-slate-850 dark:shadow-dark-xl shadow-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid p-6 pt-4 pb-0">
                        <h6 class="capitalize dark:text-white">Sales overview</h6>
                        <p class="mb-0 text-sm leading-normal dark:text-white dark:opacity-60">
                            <i class="fa fa-arrow-up text-emerald-500"></i>
                            <span class="font-semibold">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="flex-auto p-4">
                        <div>
                            <canvas id="chart-line" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
                <div slider class="relative w-full h-full overflow-hidden rounded-2xl">
                    <!-- slide 1 -->
                    <div slide class="absolute w-full h-full transition-all duration-500">
                        <img class="object-cover h-full" src="./assets/img/carousel-1.jpg" alt="carousel image" />
                        <div class="block text-start ml-12 left-0 bottom-0 absolute right-[15%] pt-5 pb-5 text-white">
                            <div
                                class="inline-block w-8 h-8 mb-4 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none">
                                <i class="top-0.75 text-xxs relative text-slate-700 ni ni-camera-compact"></i>
                            </div>
                            <h5 class="mb-1 text-white">Get started with Argon</h5>
                            <p class="dark:opacity-80">There’s nothing I really wanted to do in life that I wasn’t able to
                                get good at.</p>
                        </div>
                    </div>

                    <!-- slide 2 -->
                    <div slide class="absolute w-full h-full transition-all duration-500">
                        <img class="object-cover h-full" src="./assets/img/carousel-2.jpg" alt="carousel image" />
                        <div class="block text-start ml-12 left-0 bottom-0 absolute right-[15%] pt-5 pb-5 text-white">
                            <div
                                class="inline-block w-8 h-8 mb-4 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none">
                                <i class="top-0.75 text-xxs relative text-slate-700 ni ni-bulb-61"></i>
                            </div>
                            <h5 class="mb-1 text-white">Faster way to create web pages</h5>
                            <p class="dark:opacity-80">That’s my skill. I’m not really specifically talented at anything
                                except for the ability to learn.</p>
                        </div>
                    </div>

                    <!-- slide 3 -->
                    <div slide class="absolute w-full h-full transition-all duration-500">
                        <img class="object-cover h-full" src="./assets/img/carousel-3.jpg" alt="carousel image" />
                        <div class="block text-start ml-12 left-0 bottom-0 absolute right-[15%] pt-5 pb-5 text-white">
                            <div
                                class="inline-block w-8 h-8 mb-4 text-center text-black bg-white bg-center rounded-lg fill-current stroke-none">
                                <i class="top-0.75 text-xxs relative text-slate-700 ni ni-trophy"></i>
                            </div>
                            <h5 class="mb-1 text-white">Share with us your design tips!</h5>
                            <p class="dark:opacity-80">Don’t be afraid to be wrong because you can’t learn anything from a
                                compliment.</p>
                        </div>
                    </div>

                    <!-- Control buttons -->
                    <button btn-next
                        class="absolute z-10 w-10 h-10 p-2 text-lg text-white border-none opacity-50 cursor-pointer hover:opacity-100 far fa-chevron-right active:scale-110 top-6 right-4"></button>
                    <button btn-prev
                        class="absolute z-10 w-10 h-10 p-2 text-lg text-white border-none opacity-50 cursor-pointer hover:opacity-100 far fa-chevron-left active:scale-110 top-6 right-16"></button>
                </div>
            </div>
        </div>

        <!-- cards row 3 -->

        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 rounded-t-4">
                        <div class="flex justify-between">
                            <h6 class="mb-2 dark:text-white">Sales by Country</h6>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table
                            class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
                            <tbody>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                            <div>
                                                <img src="./assets/img/icons/flags/US.png" alt="Country flag" />
                                            </div>
                                            <div class="ml-6">
                                                <p
                                                    class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                    Country:</p>
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">United States</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Sales:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">2500</h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Value:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">$230,900</h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Bounce:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">29.9%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                            <div>
                                                <img src="./assets/img/icons/flags/DE.png" alt="Country flag" />
                                            </div>
                                            <div class="ml-6">
                                                <p
                                                    class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                    Country:</p>
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">Germany</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Sales:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">3.900</h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Value:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">$440,000</h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Bounce:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">40.22%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                        <div class="flex items-center px-2 py-1">
                                            <div>
                                                <img src="./assets/img/icons/flags/GB.png" alt="Country flag" />
                                            </div>
                                            <div class="ml-6">
                                                <p
                                                    class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                    Country:</p>
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">Great Britain</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Sales:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">1.400</h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Value:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">$190,700</h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                        <div class="flex-1 text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Bounce:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">23.44%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-0 w-3/10 whitespace-nowrap">
                                        <div class="flex items-center px-2 py-1">
                                            <div>
                                                <img src="./assets/img/icons/flags/BR.png" alt="Country flag" />
                                            </div>
                                            <div class="ml-6">
                                                <p
                                                    class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                    Country:</p>
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">Brasil</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Sales:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">562</h6>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                        <div class="text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Value:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">$143,960</h6>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal align-middle bg-transparent border-0 whitespace-nowrap">
                                        <div class="flex-1 text-center">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">
                                                Bounce:</p>
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">32.14%</h6>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="p-4 pb-0 rounded-t-4">
                        <h6 class="mb-0 dark:text-white">Categories</h6>
                    </div>
                    <div class="flex-auto p-4">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            <li
                                class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <div
                                        class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                        <i class="text-white ni ni-mobile-button relative top-0.75 text-xxs"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Devices</h6>
                                        <span class="text-xs leading-tight dark:text-white/80">250 in stock, <span
                                                class="font-semibold">346+ sold</span></span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <button
                                        class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i
                                            class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true"></i></button>
                                </div>
                            </li>
                            <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <div
                                        class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                        <i class="text-white ni ni-tag relative top-0.75 text-xxs"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Tickets</h6>
                                        <span class="text-xs leading-tight dark:text-white/80">123 closed, <span
                                                class="font-semibold">15 open</span></span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <button
                                        class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i
                                            class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true"></i></button>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-b-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <div
                                        class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                        <i class="text-white ni ni-box-2 relative top-0.75 text-xxs"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Error logs
                                        </h6>
                                        <span class="text-xs leading-tight dark:text-white/80">1 is active, <span
                                                class="font-semibold">40 closed</span></span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <button
                                        class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i
                                            class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true"></i></button>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between py-2 pr-4 border-0 rounded-b-lg rounded-xl text-inherit">
                                <div class="flex items-center">
                                    <div
                                        class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                        <i class="text-white ni ni-satisfied relative top-0.75 text-xxs"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Happy users
                                        </h6>
                                        <span class="text-xs leading-tight dark:text-white/80"><span
                                                class="font-semibold">+ 430 </span></span>
                                    </div>
                                </div>
                                <div class="flex">
                                    <button
                                        class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i
                                            class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200"
                                            aria-hidden="true"></i></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end cards -->
@endsection
