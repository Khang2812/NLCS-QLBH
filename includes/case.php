<div class="main">

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bảo hành case PC & linh kiện</li>
        </ol>
    </nav>

    <?php
        include("includes/title.php");
    ?>

    <table class="table">
        <thead class="table-dark">
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>thời gian bảo hành</th>
            <th>Mô tả</th>
        </thead>
        <?php
            //var_dump($kq);
        ?>

        <?php
            if(isset($kq)&&(count($kq)>1)){
                $i=1;
                foreach ($kq as $dmcase){
                    echo '<tbody>
                        <td>'.$dmcase['case_ten'].'</td>
                        <td>'.$dmcase['case_anh'].'</td>
                        <td>'.$dmcase['case_han'].'</td>
                        <td>'.$dmcase['case_mota'].'</td>
                </tbody>';
                $i++;
                }
            }
        ?>

    </table>
</div>