<? page::PageAdd('head'); ?>

<?php
    require_once 'include/database.php';
    require_once 'classes/time.php';
    $login = $_SESSION['user']['login'];
    $getEveryTaskForUser = mysqli_query($connect, "SELECT * FROM `task` WHERE `user login` = '$login' ORDER BY `id` DESC");
?>
<body>
	<link rel="stylesheet" href="/static/css/tasks.css">
		<? page::PageAdd('header'); ?>
		<content>
			<div class="content-center">
				<div class="land">
					<div class="block-with-add-new-tasks">
						<button class="add-new-task-btn">Добавить новый таск</button>
						<span class="where-you-can-add-task-text">Здесь вы можете добавить новый таск</span>
						<div class="relative-class-for-window-new-tasks">
						<div class="over-flow">
							<div class="window-add-new-tasks">
								<div class="children-window-add-new-tasks">
								<div class="close-btn">X</div>
									<input id="name-task" class="input-item input-for-add-new-tasks" type="text" name="name-new-tasks" placeholder="Введите название нового таска">
									<textarea id="des-task" placeholder="Описание таска" class="discriotion-task" name="discription" id="" cols="20" rows="5"></textarea>
							<div class="wrapper-take-color">
									<p class="take-color-alert">Выбирите цвет характирезующий важность задачи:</p>
								<div class="colors">
									<div class="item-th">
										<input id="red-label" class="test" type="radio" name="color-take" value="red">
										<label class="red-color" for="red-label">Красный</label>
									</div>
									<div class="item-th">
										<input id="yellow-label" class="test" type="radio" name="color-take" value="yellow">
										<label class="yellow-color" for="yellow-label">Желтый</label>
									</div>
									<div class="item-th">
										<input id="green-label" class="test" type="radio" name="color-take" value="green">
										<label class="green-color" for="green-label">Зеленный</label>
									</div>
									<div class="item-th">
										<input id="orange-label" class="test" type="radio" name="color-take" value="orange">
										<label class="orange-color" for="orange-label">Оранжевый</label>
									</div>
									<div class="item-th">
										<input id="blue-label" class="test" type="radio" name="color-take" value="blue">
										<label class="blue-color" for="blue-label">Голубой</label>
									</div>
								</div>
							</div>
                                    <button class="new-task-btn">Добавить новый таск</button>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    <div class="land-with-content">
        <? while($task = mysqli_fetch_assoc($getEveryTaskForUser)) { ?>
        	<a href="/">
        	<div class="land-pointer margin-top land">
                    <div class="item-task">
                        <div class="wrap-for-task">
                            <h2 class="task-name <? echo $task['color']; ?>"><? echo $task['name']; ?></h2>
                            <p class="time-add-task"><? echo Time::Delta($task['time add']); ?></p>
                        </div>
                            <p class="task-des"><? echo $task['discription']; ?></p>
                    </div>
            </div>
            </a>
        <? } ?>
    </div>
    </div>
		</content>
</body>
<!-- <script src="/libs/jquery.js"></script> -->
<script src="/libs/gflx.js"></script>
<script src="/static/javascript-animation/hover-button-take-color.js"></script>
<script src="/static/javascript-animation/open-task-adder.js"></script>
<script src="/static/javascript-things/wrap-line.js"></script>
<script src="/static/javascript-animation/hover-tasks.js"></script>
<script src="/static/javascript/add-new-task.js"></script>
</html>