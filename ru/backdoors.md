---
layout: default
identifier: backdoors
category: ru
title: "Никаких ''скрытых ходов'' в вашем ПО."
---

Отличие между ПО "с закрытым исходным кодом" (проприетарным) и "с открытым исходным кодом" в том (как вы только угадали?) что их "исходный код" открыт. Зачем мне об этом волноваться? Дело в том, что "исходник" или "исходный код" - как секретный <b>"рецепт"</b> каждой программы, как рецепт торта. Когда вы покупаете торт, невозможно узнать точный рецепт (разве что некоторые кусочки, например "здесь есть немного кокоса"). Если булочная выдаст рецепт к своему самому вкусному торту, то она скоро закроется, так как люди перестанут его покупать и будут готовить сами. Точно также, Microsoft не выдает исходный код к своему ПО, такому как Windows, и именно поэтому они делают такие деньги.

Проблема в том, что они могут положить <i>что угодно</i> в свой рецепт, и мы об этом не узнаем. Если они захотят добавить кусок кода в смысле "каждое 12 число месяца, если компьютер подключен к сети, создать список всех загруженных файлов, и отправить Microsoft'у по сети", им никто не помешает. Возможно, Microsoft так и не делает, но <i>как можно узнать</i>, если все закрыто, невидимо, секретно?

Совсем недавно (в октябре 2008 г.) большое количество китайских пользователей Windows (многие из них пользовались пиратской Windows) заметили кое-что странное: каждый час экран становился черным на несколько секунд. Работе врядли помешало, а вот с ума свести могло. Microsoft добавили кусок кода (как ингредиент к рецепту), в смысле "если данная версия Windows обнаружена как пиратская, выключать на несколько секунд экран каждый час". Но дело не в том, что софт был нелицензионным: это плохо и точка. Дело в том, что они получили обновление для Windows (а обновления обычно исправляют ошибки и добавляют новые возможности), не зная, как это повлияет на их систему. Никто не знал.

Изменение исходного кода открытого ПО - куда более открытый процесс. По определению, все рецепты открыты всем желающим. Не важно, можете ли вы его понять, но те, кто могут, могут следить за этим кодом. Если кто-то захочет изменить исходный код, другие разработчики увидят изменение ("эй, ты че добавляешь код для слежки за клавиатурой, ты с ума сошел?"). И даже если вся команда кодеров будут добавлять такие возможности в код, кто-то вне команды сможет достать код, извлечь все вредоносные участки, создать новую версию программы, и уведомить об этом пользователей. Все полностью <i>открыто</i>.

Поэтому, можно быть уверенным, что открытое ПО не делает ничего плохого "за спиной": сообщество постоянно следит за всеми рецептами.



