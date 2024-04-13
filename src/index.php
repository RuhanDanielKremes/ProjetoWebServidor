<!DOCTYPE html>
<html lang="en">
    <?php include '../public/header.php'; ?>
    <h1>HI</h1>
    <div class="container">
        <table>
            <thead>
            <tr>
                <th>Page Name</th>
                <th>Role view</th>
                <th>Link</th>
                <th>Created By</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>index</td>
                <td>admin</td>
                <td><a href="#">PWS/ProjetoWebServidor/src/index.php</a></td>
                <td>Ruhan</td>
            </tr>
            <tr>
                <td>Produtos Usuario</td>
                <td>User</td>
                <td><a href="view/ProductUserView.php">PWS/ProjetoWebServidor/src/view/ProductUserView.php</a></td>
                <td>Julia</td>
            </tr>
            <tr>
                <td>Produtos Admin</td>
                <td>Admin</td>
                <td><a href="view/ProductAdminView.php">PWS/ProjetoWebServidor/src/view/ProductAdminView.php</a></td>
                <td>Julia</td>
            </tr>
                <td>Carrinho de compras</td>
                <td>User</td>
                <td><a href="view/CartView.php">PWS/ProjetoWebServidor/src/view/CartView.php</a></td>
                <td>Kaue</td>
            </tbody>
        </table>
    </div>
    <?php include '../public/breadcrumbs.php'; ?>
    <?php //include 'CartController.php';?>
    <?php include '../public/footer.php'?>

</html>

