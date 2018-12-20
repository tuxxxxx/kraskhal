cd ..\..
echo Глобальная настйрока переменных, достаточно выполнить 1 раз
git config --global user.name NEFUstudent
git config --global user.email study.svfu@gmail.com
echo Добавим трекинг всех новых файлов
git add -A
echo Коммит всех локальных изменений, не забываем в комментарии указывать суть внесенных изменений
git commit -a -m "comething new"
echo Объединяем все изменения из удаленного репозитория с локальной версией
git pull origin master
echo Применение коммита, мерж локальных измнений в удаленный репозиторий
git push origin master
