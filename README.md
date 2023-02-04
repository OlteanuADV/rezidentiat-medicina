<h1>
    Proiect realizat in Laravel pentru rezidentiat-medicina.ro
</h1>
<p>
    Informatii despre proiect, cum a fost realizat, ce a fost folosit, etc. <br>
    Foloseste ca si baza de date MySQL, iar pentru a crea tabelele si a popula baza de date cu date preluate din baza veche, se foloseste comanda <br>
    <code>php artisan migrate:fresh --seed</code> <br>
    Informatii legate de baza de date:
    <ul>
        <li>
            tabel utilizatori, contine name, email, password, remember_token, created_at, updated_at
        </li>
        <li>
            tabel chapters, contine id, name, created_at, updated_at cu relatia de legatura hasMany subchapters
        </li>
        <li>
            tabel subchapters, contine id, name, chapter_id, parent_id created_at, updated_at cu relatia de legatura belongsTo chapters si hasMany questions
        </li>
        <li>
            tabel questions, contine id, question, subchapter_id, created_at, updated_at cu relatia de legatura belongsTo subchapters si hasMany answers
        </li>
        <li>
            tabel answers, contine id, answer, question_id, correct, created_at, updated_at cu relatia de legatura belongsTo questions
        </li>
    </ul>
</p>