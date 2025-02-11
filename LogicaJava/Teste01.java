import java.util.ArrayList;
import java.util.Scanner;

public class Sistema {
    // Definindo um método para mostrar uma saudação
    public static void saudacao() {
        System.out.println("Bem-vindo ao Sistema!");
    }

    // Método para somar dois números
    public static int somar(int a, int b) {
        return a + b;
    }

    // Método para verificar se um número é par ou ímpar
    public static String verificarParOuImpar(int numero) {
        if (numero % 2 == 0) {
            return "Par";
        } else {
            return "Ímpar";
        }
    }

    // Método para exibir uma lista de números
    public static void exibirLista(ArrayList<Integer> lista) {
        System.out.println("Lista de Números:");
        for (int num : lista) {
            System.out.println(num);
        }
    }

    // Função principal
    public static void main(String[] args) {
        // Scanner para ler a entrada do usuário
        Scanner scanner = new Scanner(System.in);

        // Saudação inicial
        saudacao();

        // Variáveis básicas
        int numero1, numero2;
        System.out.print("Digite o primeiro número: ");
        numero1 = scanner.nextInt(); // Leitura de número inteiro

        System.out.print("Digite o segundo número: ");
        numero2 = scanner.nextInt(); // Leitura de número inteiro

        // Soma dos números
        int resultadoSoma = somar(numero1, numero2);
        System.out.println("Resultado da soma: " + resultadoSoma);

        // Verificando se os números são pares ou ímpares
        System.out.println("O número " + numero1 + " é " + verificarParOuImpar(numero1));
        System.out.println("O número " + numero2 + " é " + verificarParOuImpar(numero2));

        // Criando uma lista de números
        ArrayList<Integer> listaNumeros = new ArrayList<>();
        listaNumeros.add(numero1); // Adicionando o número 1 na lista
        listaNumeros.add(numero2); // Adicionando o número 2 na lista

        // Exibindo os números da lista
        exibirLista(listaNumeros);

        // Trabalhando com laços de repetição (for)
        System.out.print("Digite um número para contar até ele: ");
        int limite = scanner.nextInt();
        System.out.println("Contando até " + limite + ":");
        for (int i = 1; i <= limite; i++) {
            System.out.println(i);
        }

        // Condicional: verificando se um número é positivo, negativo ou zero
        System.out.print("Digite um número para verificar se é positivo, negativo ou zero: ");
        int numeroVerificacao = scanner.nextInt();
        if (numeroVerificacao > 0) {
            System.out.println("O número é positivo.");
        } else if (numeroVerificacao < 0) {
            System.out.println("O número é negativo.");
        } else {
            System.out.println("O número é zero.");
        }

        // Fechando o scanner
        scanner.close();
    }
}
