modx-starter
============

MODX Bootstrap for comfortable start of work



Что должен уметь

1. Прописывает параметры конфигурации по умолчанию на оптимальные (можно прописать свои и собрать свой пакет), возможно несколько конфигураций, можно выбрать при сборке пакета
прод, девелоп и тд

date_timezone = Europe/Minsk
log_level = 4 // debug for development, 1 - def
link_tag_scheme = full
manager_date_format = d.m.Y

manager_favicon_url ???
manager_time_format = H:i
manager_week_start = 1
topmenu_show_descriptions = true // можно отключать иногда

automatic_alias = true
friendly_alias_translit = russian // ставить автоматом yTranslit
friendly_urls = true
friendly_urls_strict = true
use_alias_path = true
upload_maxsize = 10485760 // 10Mb
which_element_editor = ace // поставить автоматически
cache_disabled = true
cache_scripts = false



2. Устанавливает необходимые пакеты
Еще придумать, как автоматом ключ сгенерить на store.simpledream.com

StaticSaver
ElementHelper
сюда еще придумать такую фишку, чтобы скрипты деплоя клались с правильной настройкой, которые сейчас используются, автоматизируем по максимуму


Ace
TypoMCE ??
pdoTools ??
getPage ?? (pdoTool есть)
HybridAuth // не факт, что нужно
yTranslit
Batcher ??
ClientConfig ??
AjaxManager ?? //не факт, что всегда круто работает со всем
Notify404 // полезно, но в деве нафиг нужно
Redirector // для переделки проекта
Babel // если языки

dropbox, yandex.disk - если нужно сохранять куда-то еще

getResourceField
getResources
UltimateParent



3. Создает необходимое окружение

4. Создает примитивное дерево, настройка 404 страницы и тд // от задач. пресеты для разных типов сайтов