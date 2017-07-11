# where-fishing
[GeekUniversity 2017 Web] Командный проект 
@page { margin: 2cm }
		p { margin-bottom: 0.25cm; line-height: 120% }
		a:link { so-language: zxx }
	

Где клюет?

**1.1
Цели и задачи проекта.**

В
целом ресурс создаётся с целью помочь
рыболовам найти места для рыбалки.
Обычно рыбаки хорошо знают водоёмы
рядом с домом, но что делать если вы
оказались в незнакомой части страны,
взяли с собой удочки и хотите порыбачить?
Вот тут-то мы им и поможем.

Основные
цели:

1. Поиск
	мест для рыбалки 
2. Отчёты
	о рыбалке в представленных местах на
	сайте 
3. Помощь
	в организации совместных поездок на
	рыбалку по типу bla-bla
	car и
	аналогов 
4. Барахолка,
	куда же без неё (вот тут сложно, нужно
	следить чтобы не было кидалова) 
5. Еще
	один сайт со статьями про рыбалку,
	которые будут завлекать на основную
	часть ресурса (нужны для привлечения
	людей через поисковые системы). 

Вторичные
цели (не сразу):

1. Реклама
	платных прудов 
2. Реклама
	рыболовных баз 
3. Размещение
	платных обзоров нового оборудования 
4. Розыгрыши
	брендированного хлама от разных
	рекламодателей 
5. Вероятно
	когда-то проведение рыболовных фестивалей 

**1.2
Аудитория проекта**

Вот
тут реально сложно, можно попробовать
выпросить данные у какого-нибудь
рыболовного сайта, но я что-то не смог
придумать, зачем нам вообще эти данные
сейчас. Как только сайт запустим - будем
наблюдать данные в Google
Analytics и
Яндекс Метрике и, если что, где-нибудь
что-то скорректируем. Для аналитики
аудитории нужен уже очень опытный
маркетолог, который скажет, что аудитории
25-35 нужно продавать рыбалку с помощью
помощью женщины "морячки-рыбачки",
которая
будет вся такая завлекать. Не уверен
что это Пин-Ап, но похоже на [http://2d.by/wallpapers/r/rybachka.jpg](http://2d.by/wallpapers/r/rybachka.jpg).

**1.3
Структура проекта**

Структуру
я пока слабо представляю, нужно обсуждать
и править данный пункт в следующих
версиях ТЗ.

1. Главная 

		Новости

		Свежие статьи

		Свежие отчёты

		Свежие предложения о рыбалке

		Виджет с погодой

		Виджет с прогнозом клёва рыбы (хз как делать О_о) видел у других

1. Рыбные
	места  

		Фильтры

		Список мест

		Карта

		Отчёты списком со ссылкой на место

		Сами странички обзоров с рыбными мастами

			Комментарии

			Отчёты

			Предложения о совместной поездке

1. Вместе
	на рыбалку 

		Фильтры по местам

		Фильтры по планируемым снастям (вероятно должно обсуждаться)

		Предложения о совместной поездке на рыбалку

1. Платная
	рыбалка 

		Разные фильтры

		Список платных платных прудов

			Описание

			Обсуждение

			На карте

		Список рыболовных баз

			Описание

			Обсуждение

			На карте

1. Обсуждения 

		Форум, который связан с обсуждениями на сайте, по сути дублирует.

1. Статьи 

		Поиск

		Категории

		Список статей

Вот
это вот выше очень примерно, чтобы
понимать объем работ.

Дизайны
и мокапы делать не хочется, чукча не
дизайнер.

**1.4
Где брать контент**

Начальный
контент придётся написать самим, т.е.
нагло стырить статьи и обзоры с других
сайтов, в robots.txt
закрыть
сайт от индексации, чтобы ПС не
проиндексировали всё это безобразие и
не пришли к выводу, что сайта копипаста
и помойка.

Перед
открытием, если такое случится, статьи
нужно будет унифицировать, будь то
рерайт или новые, позже решим.

**В
будущем:**

Ожидается,
что источником контекта, в большинстве
своём, будут пользователи, хотя мне
кажется, что некий штатный рыболов-писатель
нам таки понадобится.

**Мотивация
пользователей:**

1. Всякие
	плюшки ввиде звёздочек, статус баров
	и прочей мути на форуме (в комментах). 
2. Брендированный
	мерч от партнёров за написание какого-то
	кол-ва статей или совершения каких-то
	полезных действий на сайте, вероятно
	может получиться какая-то система
	"рыбацкий
	баллов",
	за
	которые можно что-то получить. 
3. Скидки
	в специализированных магазинах на
	какие-то товары. 
4. Конкурсы
	лучших статей сезона (летний - зимний)
	или вроде того. 

**2
Распределение работ**

Тут
мы еще напишем кто и что будет делать,
сразу скажу, что я готов делать какие-то
отдельные модули для сайта, на бизнес
вопросы и написания статей в данном
проекте мне не очень хочется тратить
время, т.к. работа и проекты у меня есть
свои, а тут я программировать учусь.

**3.1
Прототипы страниц**

Здесь
должны быть мокапы, много мокапов.
Алексей Сергиенко, вроде, начал их
делать, ну и славно, добавим их потом
сюда после обсуждений.

**3.2
Пути пользователей**

Создавая
этот ресурс мы хотим, чтобы рыбаки его
посещали регулярно, а не просто зашел
- вышел, поэтому никакого "Лендинг"
давления
мы на них оказывать не планируем, будем
делать просто и качественно, т.е. Сайт
будет помогать решить пользователю ту
проблему, с которой он пришел на сайт,
а не навязывать ему что-то всплывающими
баннерами и прочей пакостью. 

По
началу у нас будет несколько типов
пользователей, рассмотрим их кратко,
т.е. всё это, вероятно, придётся переделывать
по мере поступления данных из систем
аналики, как это обычно и бывает. Может
ГУРУ маркетинга и веб дизайна способны
точно угадать что же будет делать
пользователь, но я себя таковым не
считаю.

**Органический
поиск:**

По
началу это будут наши основные посетители.
Они будут приходить на наши статьи о
рыбалке, которые будут потихоньку ползти
вверх в поиске, в основном по "низкочастотным"
запросам,
т.е. длинным, типа "ловля
на фидер в подмосковье".

Статьи
наши будут связаны между собой ссылками,
так же где-то рядом с текстом имеет смысл
размещать ссылки на какие-то другие
части сайта, например на новости, прогноз
клёва, на другие статьи похожие на ту,
которую читает пользователь. Каждый
тип страниц заслуживает **отдельного
ТЗ **и
подробного рассмотрения.

Пользователь
читает статью - уходит с неё на другие
статьи по мере надобности, никакого
давления.

**Соцсети
и реклама:**

Вероятно
удастся "обменяться"
ссылками
с какими-то еще рыболовными ресурсами,
разместить бесплатные ссылки в рыболовных
группах итд, скорее всего это будут
ссылки на главную.

Там
они будут читать новости и уходить на
обзоры мест рыбной ловли и потом в
поездки или обсуждения, т.к. в соцсетях
и рекламе не будет ничего про статьи,
там уже будет конкретно продвигаться
основная фишка ресурса, т.е. рыболовные
места на карте.

**4
Техническая часть**

На
чём писать будем, товарищи? Какие
технологии использовать?

Логично
предположить, что нам бы надо использовать
всё то что мы уже изучили на курсе, но
без того что мы еще не изучали, тогда
получается:

1. Наш
	php
	фреймворк
	(чур не мой) 
2. Чистый
	js 
3. html/sass 
4. gulp 

Я
бы предложил Yii2,
но
мы его еще не проходили и всем будет
сложно.

Какие-то
готовые CMS
не
предлагаю, т.к. там еще сложнее и дурнее,
мне кажется нам будет проще писать "с
нуля".

Плюсы
подхода
- удобно, понятно, гибко.

Минусы
- новичковая структура, детские ошибки
проектов, проблемы с безопасностью.

**4.1
Модули, которые нужно будет разработать**

1. Обсуждения,
	которые связаны с форумом, это надо
	будет осилить API
	какого-то
	форумного движка и из его базы запрашивать,
	а так же научиться в неё писать. 
2. Личный
	кабинет пользователя, тоже должен быть
	связан с форумом по текущей модели. 
3. Карта
	с возможностью ставить метки и
	кастомизировать там всё. 
4. Добавление
	места рыбалки. 
5. Система
	создания поездки на место рыбалки. 
6. Админка
	сайта, там статьи, платные пруды и прочие
	настройки, почти CMS,
	мы же не хотим править конфиг файлы
	проекта чтобы что-то изменить. 

Более
подробно должно быть прописано при
создании конкретного ТЗ к каждому типу
страниц.

**5
Тестирование**

Хорошо
бы писать это всё в стиле TDD,
но
можно на это и забить, т.к. долго это О_о

Ну
а если надумаем, то нужно разбить весь
проект на отдельные тестовые группы и
запускать их по очереди через GULP
перед
деплоем новых версий проекта на хостинг.
Каждый отвечает за свою группу, вероятно
дргуим в чужой код лазать вообще и не
нужно, только делать ТЗ взаимодействия
компонентов, как мы рассматривали вконце
JS
курса.