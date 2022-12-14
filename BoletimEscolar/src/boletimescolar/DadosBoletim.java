package boletimescolar;
import java.util.Scanner;

public class DadosBoletim {
    public float notahtml,notacss,notajs,notaphp,notamysql,notajava,media,frequencia;
    Scanner ler = new Scanner(System.in);

    public void calcularMedia(){
        System.out.println("Digite a nota de html: ");
            notahtml = ler.nextFloat();
        System.out.println("Digite a nota de css: ");
            notacss = ler.nextFloat();
        System.out.println("Digite a nota de js: ");
            notajs = ler.nextFloat();
        System.out.println("Digite a nota de php: ");
            notaphp = ler.nextFloat();
        System.out.println("Digite a nota de mysql: ");
            notamysql = ler.nextFloat();            
        System.out.println("Digite a nota de java: ");
            notajava = ler.nextFloat();
        System.out.println("Digite a frequencia: ");
            frequencia = ler.nextFloat();            
        ler.close();
        media = (notahtml+notacss+notajs+notaphp+notamysql+notajava)/6;
    }
    public void mostrarResultado(){
        if(media>=7&&frequencia>=0.7){
            System.out.println("O aluno foi aprovado com media: "+media);
        }else{
            System.out.println("O aluno foi reprovado com media: "+media);
        }
    }
}