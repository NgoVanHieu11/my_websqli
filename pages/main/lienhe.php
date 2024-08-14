<div class="maincontent_lh">
    <h3 class="section-title">Liên hệ</h3>
    <?php
        $sql_lh = "SELECT * FROM tbl_lienhe WHERE id = 1";
        $query_lh = mysqli_query($mysqli,$sql_lh);
    ?>
        <?php
            While($dong = mysqli_fetch_array($query_lh)){    
        ?>   
            <p>
                <?php echo $dong['thongtinlienhe'] ?>
            </p>
            <?php
            }
            ?>
        </from>
    </table>
</div>