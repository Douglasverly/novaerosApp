<div id="menuPanel">

<ul>
    <li>
        <a href="/panel/user"<?php if (isset($data['data']['activeUser'])) {echo $data['data']['activeUser'];}?>>Usuário</a>
    </li>

    <li>
        <a href="/panel/table"<?php if (isset($data['data']['activeMesa'])) {echo $data['data']['activeMesa'];}?>>Mesa</a>
    </li>

    <li>
        <a href="/panel/games"<?php if (isset($data['data']['activeGame'])) {echo $data['data']['activeGame'];}?>>Jogos</a>
    </li>

</ul>

</div>
